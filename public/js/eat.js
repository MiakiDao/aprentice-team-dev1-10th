let mealCount = 0;

const form = document.getElementById("mealForm");
const tbody = document.getElementById("mealLogBody");
const result = document.getElementById("result");
const countArea = document.getElementById("countArea");

// バーをアニメーションさせる関数
function animateProgressBar(targetPercentage) {
  const progress = document.querySelector(".progress");
  progress.style.width = "0%";
  let current = 0;  

  const interval = setInterval(() => {
    current += 1;
    if (current >= targetPercentage) {
      current = targetPercentage;
      clearInterval(interval);
    }
    progress.style.width = current + "%";

    if (current > 80) {
      progress.style.backgroundColor = "#EB489A";
    } else if (current > 60) {
      progress.style.backgroundColor = "#58A65C";
    } else if (current > 40) {
      progress.style.backgroundColor = "#5383EC";
    } else if (current > 20) {
      progress.style.backgroundColor = "#AA3A75";
    } else {
      progress.style.backgroundColor = "#F5E24D";
    }
  },20);
}

function updateCount() {
  mealCount = JSON.parse(localStorage.getItem("meals") || "[]").length;
  countArea.textContent = `登録数: ${mealCount}件`;
  animateProgressBar(mealCount);
}

// localStorage の件数
window.addEventListener("load", () => {
  const savedMeals = JSON.parse(localStorage.getItem("meals") || "[]");

  savedMeals.slice().reverse().forEach((item) => addMealRow(item.date, item.detail));

  mealCount = savedMeals.length;
  updateCount(0, true);
});

// 登録処理後に呼び出す
form.addEventListener("submit", function (event) {
  event.preventDefault();
  const inputValue = document.getElementById("meal").value.trim();
  if (!inputValue) {
    result.textContent = "内容を入力してください";
    return;
  }

  const today = new Date();
  const dateStr = `${today.getMonth() + 1}/${today.getDate()}`;
  addMealRow(dateStr, inputValue);

  const savedMeals = JSON.parse(localStorage.getItem("meals") || "[]");
  savedMeals.unshift({ date: dateStr, detail: inputValue });
  localStorage.setItem("meals", JSON.stringify(savedMeals));

  document.getElementById("meal").value = "";
  result.textContent = "内容が登録されました";

  updateCount();
});

// 削除処理後に呼び出す
function addMealRow(date, detail) {
  const newRow = document.createElement("tr");
  const dateCell = document.createElement("td");
  dateCell.textContent = date;
  const contentCell = document.createElement("td");
  contentCell.innerHTML = detail.replace(/\n/g, "<br>");
  const actionCell = document.createElement("td");
  const delBtn = document.createElement("button");
  delBtn.textContent = "削除";
  delBtn.style.cursor = "pointer";

  delBtn.addEventListener("click", () => {
    newRow.remove();
    let savedMeals = JSON.parse(localStorage.getItem("meals") || "[]");
    savedMeals = savedMeals.filter(
      (m) => !(m.date === date && m.detail === detail)
    );
    localStorage.setItem("meals", JSON.stringify(savedMeals));

    result.textContent = "記録を削除しました";
    updateCount();
  });

  actionCell.appendChild(delBtn);
  newRow.appendChild(dateCell);
  newRow.appendChild(contentCell);
  newRow.appendChild(actionCell);
  tbody.prepend(newRow);
}

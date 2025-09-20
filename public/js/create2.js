// /js/create2.js
document.addEventListener("DOMContentLoaded", () => {
	const imgs = document.querySelectorAll(".photo-list img");
  const form = document.querySelector("#signup-form") || document.querySelector("form");

  let hiddenInput;
  const ensureHidden = () => {
    if (hiddenInput) return hiddenInput;
    hiddenInput = document.createElement("input");
    hiddenInput.type = "hidden";
    hiddenInput.name = "character_image"; // バックエンドに渡る値（任意名でOK）
    hiddenInput.id = "character_image";
    if (form) form.appendChild(hiddenInput);
    return hiddenInput;
  };

  // 前回選んだ画像をハイライト
  const saved = localStorage.getItem("selectedCharacter");
  if (saved) {
    imgs.forEach(img => {
      if (img.getAttribute("src") === saved) img.classList.add("is-selected");
    });
  }

  imgs.forEach(img => {
    img.style.cursor = "pointer";
    img.addEventListener("click", () => {
      const src = img.getAttribute("src");         // 例: /image/man2.png
      localStorage.setItem("selectedCharacter", src);

      // 見た目の選択状態を更新
      imgs.forEach(i => i.classList.remove("is-selected"));
      img.classList.add("is-selected");

      // フォーム送信用 hidden も更新（バックエンド用。あなたはPHP不要）
      const h = ensureHidden();
      h.value = src;
    });
  });

  if (form) {
    form.addEventListener("submit", () => {
      const src = localStorage.getItem("selectedCharacter");
      if (src) ensureHidden().value = src;
    });
  }
});

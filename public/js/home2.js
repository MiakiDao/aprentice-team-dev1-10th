// public/js/home2.js
(() => {
  const ids = { weight: "weight", height: "height", bodyFat: "bodyfat", muscle: "muscle" };
  const set = (key, val, unit = "") => {
    const el = document.getElementById(ids[key]);
    if (el) el.textContent = (val ?? val === 0) ? `${val}${unit}` : "-";
  };
  const pick = (...vals) => {
    for (const v of vals) if (v !== undefined && v !== null && v !== "") return v;
    return null;
  };
  const pickFrom = (obj, keys) => {
    if (!obj) return null;
    for (const k of keys) if (obj[k] !== undefined && obj[k] !== null) return obj[k];
    return null;
  };

  document.addEventListener("DOMContentLoaded", async () => {
    // --- 1) 体重・身長などの表示（data-* 優先 → API フォールバック） ---
    const statsEl = document.querySelector(".stats");
    if (statsEl && Object.keys(statsEl.dataset).length) {
      const m = {
        weight:  pick(statsEl.dataset.weight, statsEl.dataset.weightKg),
        height:  pick(statsEl.dataset.height, statsEl.dataset.heightCm),
        bodyFat: pick(statsEl.dataset.bodyFat, statsEl.dataset.body_fat, statsEl.dataset.bodyFatPct),
        muscle:  pick(statsEl.dataset.muscle, statsEl.dataset.muscleMass, statsEl.dataset.leanMass),
      };
      set("weight", m.weight, " kg");
      set("height", m.height, " cm");
      set("bodyFat", m.bodyFat, " %");
      set("muscle", m.muscle, " kg");
    } else {
      try {
        const res = await fetch("/api/metrics/latest", {
          headers: { Accept: "application/json" },
          credentials: "include",
        });
        if (!res.ok) throw new Error(`HTTP ${res.status}`);
        const data = await res.json();

        const candidates = [data, data?.metrics, data?.profile, data?.latest, data?.data];
        const get = (keys) => {
          for (const src of candidates) {
            const v = pickFrom(src, keys);
            if (v !== null) return v;
          }
          return null;
        };

        const weight  = get(["weight", "weight_kg", "体重"]);
        const height  = get(["height", "height_cm", "身長"]);
        const bodyFat = get(["body_fat", "bodyFat", "body_fat_pct", "体脂肪"]);
        const muscle  = get(["muscle_mass", "muscleMass", "lean_mass", "筋肉量"]);

        set("weight",  weight,  " kg");
        set("height",  height,  " cm");
        set("bodyFat", bodyFat, " %");
        set("muscle",  muscle,  " kg");
      } catch (e) {
        console.warn("[home2] metrics fetch failed:", e);
      }
    }

    // --- 2) キャラ画像の差し替え（選択したキャラがあれば反映） ---
    const heroImg = document.querySelector(".hero-card img");
    const chosen = localStorage.getItem("selectedCharacter");  // 例: "/image/man2.png"
    if (heroImg && chosen) {
      heroImg.src = chosen;
      heroImg.alt = "選択したキャラクター";
    }

    // --- 3) コツコツバー（localStorage 'meals' の件数で進捗） ---
    const countArea = document.getElementById("countArea");
    const progress = document.querySelector(".progress");
    if (countArea && progress) {
      let mealCount = 0;
      try {
        const meals = JSON.parse(localStorage.getItem("meals") || "[]");
        mealCount = Array.isArray(meals) ? meals.length : 0;
      } catch (_) {
        mealCount = 0;
      }
      countArea.textContent = `記録数: ${mealCount}件`;

      // 0〜100%に丸める（件数＝％の単純マッピング）
      const target = Math.max(0, Math.min(mealCount, 100));
      animateProgressBar(progress, target);
    }
  });

  function animateProgressBar(progressEl, target) {
    progressEl.style.width = "0%";
    let current = 0;
    const interval = setInterval(() => {
      current += 1;
      if (current >= target) {
        current = target;
        clearInterval(interval);
      }
      progressEl.style.width = current + "%";

      if (current > 80) {
        progressEl.style.backgroundColor = "#EB489A";
      } else if (current > 60) {
        progressEl.style.backgroundColor = "#58A65C";
      } else if (current > 40) {
        progressEl.style.backgroundColor = "#5383EC";
      } else if (current > 20) {
        progressEl.style.backgroundColor = "#AA3A75";
      } else {
        progressEl.style.backgroundColor = "#F5E24D";
      }
    }, 20);
    }
    document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('go-setting')?.addEventListener('click', () => {
      window.location.assign('/index.php?page=setting');
    });
  });

})();

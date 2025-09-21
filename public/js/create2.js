document.addEventListener("DOMContentLoaded", () => {
	const imgs = document.querySelectorAll(".photo-list img");
  const form = document.querySelector("#signup-form") || document.querySelector("form");

  let hiddenInput;
  const ensureHidden = () => {
    if (hiddenInput) return hiddenInput;
    hiddenInput = document.createElement("input");
    hiddenInput.type = "hidden";
    hiddenInput.name = "character_image";
    hiddenInput.id = "character_image";
    if (form) form.appendChild(hiddenInput);
    return hiddenInput;
  };

  const saved = localStorage.getItem("selectedCharacter");
  if (saved) {
    imgs.forEach(img => {
      if (img.getAttribute("src") === saved) img.classList.add("is-selected");
    });
  }

  imgs.forEach(img => {
    img.style.cursor = "pointer";
    img.addEventListener("click", () => {
      const src = img.getAttribute("src");
      localStorage.setItem("selectedCharacter", src);

      imgs.forEach(i => i.classList.remove("is-selected"));
      img.classList.add("is-selected");

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

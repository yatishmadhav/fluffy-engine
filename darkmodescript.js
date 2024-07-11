const theme = window.localStorage.getItem("theme");
if (theme === "dark") document.body.classList.add("dark");
document.getElementById("toggle").addEventListener("click", () => {
	document.body.classList.toggle("dark");
	if (theme === "dark") {
		window.localStorage.setItem("theme", "light");
	} else window.localStorage.setItem("theme", "dark");
});
document.getElementById("refresh").addEventListener("click", () => {
	window.location.reload();
});

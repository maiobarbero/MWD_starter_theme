(function ($) {
	$(function () {
		// Scroll To Top
		$(".to__top").click(function () {
			$(window).scrollTop(0);
		});

		//Switch Nigth Mode
		const toggleBtn = document.querySelector("#flexSwitchCheckDefault");
		if (
			(window.matchMedia &&
				window.matchMedia("(prefers-color-scheme: dark)").matches) ||
			localStorage.getItem("checked")
		) {
			document.body.setAttribute("data-theme", "dark");
			toggleBtn.setAttribute("checked", "checked");
			localStorage.setItem("checked", "checked");
		}

		$("#flexSwitchCheckDefault").click(function () {
			if ($("#flexSwitchCheckDefault").is(":checked")) {
				$("body").attr("data-theme", "dark");
				localStorage.setItem("checked", "checked");
			} else {
				$("body").attr("data-theme", "light");
				localStorage.removeItem("checked");
			}
		});
	});
})(jQuery);

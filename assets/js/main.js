(function ($) {
	$(function () {
		// Scroll To Top
		$(".to__top").click(function () {
			$(window).scrollTop(0);
		});

		//Switch Nigth Mode
		const toggleBtn = document.querySelector("#flexSwitchCheckDefault");
		if (
			window.matchMedia &&
			window.matchMedia("(prefers-color-scheme: dark)").matches
		) {
			document.body.setAttribute("data-theme", "dark");
			toggleBtn.setAttribute("checked", "checked");
		}

		$("#flexSwitchCheckDefault").click(function () {
			if ($("#flexSwitchCheckDefault").is(":checked")) {
				$("body").attr("data-theme", "dark");
			} else {
				$("body").attr("data-theme", "light");
			}
		});
	});
})(jQuery);

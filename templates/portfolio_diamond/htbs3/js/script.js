
  //Portfolio hexogan
  jQuery(".portfolio-diamond-wrap").diamonds({
  	size: 220, // Size of diamonds in pixels. Both width and height. 
  	gap: 10, // Pixels between each square.
  	hideIncompleteRow: false, // Hide last row if there are not enough items to fill it completely.
  	autoRedraw: true, // Auto redraw diamonds when it detects resizing.
  	itemSelector: ".diamonditem" // the css selector to use to select diamonds-items.
  });
  jQuery(".filteritem").click(function() {
  	var category = jQuery(this).text();
  	jQuery(".diamonditem").parent().parent().parent().removeClass("diamonditem-visible");
  	jQuery(".diamonditem").parent().parent().parent().addClass("diamonditem-hidden");

  	jQuery(".diamonditem[data-categories*='" + category + "']").parent().parent().parent().removeClass("diamonditem-hidden").addClass("diamonditem-visible");
  });
  jQuery(".filteritemall").click(function() {
  	jQuery(".diamonditem").parent().parent().parent().removeClass("diamonditem-hidden");
  	jQuery(".diamonditem").parent().parent().parent().addClass("diamonditem-visible");
  });

  jQuery(".diamond-menu span").click(function() {
  	jQuery(".diamond-menu span").removeClass('active');
  	jQuery(this).addClass('active');
  });

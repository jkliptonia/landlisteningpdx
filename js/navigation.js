/**
 * File navigation.js.
 *
 * Handles the mobile-menu on mobile devices
 */
(function($) {
  
  $('.site-info').show();
  const isMobile = $('.main-navigation').find('.menu-mobile-menu-container');
  isMobile.length ? mobileNavInit() : null;

  function mobileNavInit() {
    const mobileMenu = $('#menu-mobile-menu');
    $('.site-info').hide();

    const menuArray = mobileMenu.children('li');
    const menuButton = menuArray.first();
    menuButton.addClass('mobile-menu-first');
    menuArray.not('.mobile-menu-first').addClass('mobile-menu-slide');
  
    toggleMobileMenu();
    menuButton.click(toggleMobileMenu);

    function toggleMobileMenu() {
      $('.mobile-menu-slide').slideToggle(1000);
      menuButton.show();
    }
  };
})(jQuery);

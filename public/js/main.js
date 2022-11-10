$(document).ready(function () {
    window._token = $('meta[name="csrf-token"]').attr('content')

    var allEditors = document.querySelectorAll('.ckeditor');
    for (var i = 0; i < allEditors.length; ++i) {
      ClassicEditor.create(
          allEditors[i],
          {
              removePlugins: ['ImageUpload']
          }
      );
    }

    moment.updateLocale('en', {
      week: {dow: 1} // Monday is the first day of the week
    })

    $('.date').datetimepicker({
      format: 'YYYY-MM-DD',
      locale: 'en'
    })

    $('.datetime').datetimepicker({
      format: 'YYYY-MM-DD HH:mm:ss',
      locale: 'en',
      sideBySide: true
    })

    $('.timepicker').datetimepicker({
      format: 'HH:mm:ss'
    })

    $('.select-all').click(function () {
      let $select2 = $(this).parent().siblings('.select2')
      $select2.find('option').prop('selected', 'selected')
      $select2.trigger('change')
    })
    $('.deselect-all').click(function () {
      let $select2 = $(this).parent().siblings('.select2')
      $select2.find('option').prop('selected', '')
      $select2.trigger('change')
    })

    $('.select2').select2()

    $('.treeview').each(function () {
      var shouldExpand = false
      $(this).find('li').each(function () {
        if ($(this).hasClass('active')) {
          shouldExpand = true
        }
      })
      if (shouldExpand) {
        $(this).addClass('active')
      }
    })
	// Gallery carousel (uses the Owl Carousel library)
  $(".gallery-carousel").owlCarousel({
     animateOut: 'slideOutDown',
       animateIn: 'flipInX',
       items: 1,
       stagePadding: 30,
       smartSpeed: 4050,
    autoplay: true,
    dots: true,
    loop: true,
    center:true,

    responsive: { 0: { items: 1 }, 768: { items: 3 }, 992: { items: 4 }, 1200: {items: 5}
    }
  });
  })

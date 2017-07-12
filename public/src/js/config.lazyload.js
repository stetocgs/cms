// lazyload config

angular.module('app')
    /**
   * jQuery plugin config use ui-jq directive , config the js and css files that required
   * key: function name of the jQuery plugin
   * value: array of the css js file located
   */
  .constant('JQ_CONFIG', {
      easyPieChart:   [   'public/html/../libs/jquery/jquery.easy-pie-chart/dist/jquery.easypiechart.fill.js'],
      sparkline:      [   'public/html/../libs/jquery/jquery.sparkline/dist/jquery.sparkline.retina.js'],
      plot:           [   'public/html/../libs/jquery/flot/jquery.flot.js',
                          'public/html/../libs/jquery/flot/jquery.flot.pie.js', 
                          'public/html/../libs/jquery/flot/jquery.flot.resize.js',
                          'public/html/../libs/jquery/flot.tooltip/js/jquery.flot.tooltip.min.js',
                          'public/html/../libs/jquery/flot.orderbars/js/jquery.flot.orderBars.js',
                          'public/html/../libs/jquery/flot-spline/js/jquery.flot.spline.min.js'],
      moment:         [   'public/html/../libs/jquery/moment/moment.js'],
      screenfull:     [   'public/html/../libs/jquery/screenfull/dist/screenfull.min.js'],
      slimScroll:     [   'public/html/../libs/jquery/slimscroll/jquery.slimscroll.min.js'],
      sortable:       [   'public/html/../libs/jquery/html5sortable/jquery.sortable.js'],
      nestable:       [   'public/html/../libs/jquery/nestable/jquery.nestable.js',
                          'public/html/../libs/jquery/nestable/jquery.nestable.css'],
      filestyle:      [   'public/html/../libs/jquery/bootstrap-filestyle/src/bootstrap-filestyle.js'],
      slider:         [   'public/html/../libs/jquery/bootstrap-slider/bootstrap-slider.js',
                          'public/html/../libs/jquery/bootstrap-slider/bootstrap-slider.css'],
      chosen:         [   'public/html/../libs/jquery/chosen/chosen.jquery.min.js',
                          'public/html/../libs/jquery/chosen/bootstrap-chosen.css'],
      TouchSpin:      [   'public/html/../libs/jquery/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js',
                          'public/html/../libs/jquery/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css'],
      wysiwyg:        [   'public/html/../libs/jquery/bootstrap-wysiwyg/bootstrap-wysiwyg.js',
                          'public/html/../libs/jquery/bootstrap-wysiwyg/external/jquery.hotkeys.js'],
      dataTable:      [   'public/html/../libs/jquery/datatables/media/js/jquery.dataTables.min.js',
                          'public/html/../libs/jquery/plugins/integration/bootstrap/3/dataTables.bootstrap.js',
                          'public/html/../libs/jquery/plugins/integration/bootstrap/3/dataTables.bootstrap.css'],
      vectorMap:      [   'public/html/../libs/jquery/bower-jvectormap/jquery-jvectormap-1.2.2.min.js', 
                          'public/html/../libs/jquery/bower-jvectormap/jquery-jvectormap-world-mill-en.js',
                          'public/html/../libs/jquery/bower-jvectormap/jquery-jvectormap-us-aea-en.js',
                          'public/html/../libs/jquery/bower-jvectormap/jquery-jvectormap.css'],
      footable:       [   'public/html/../libs/jquery/footable/v3/js/footable.min.js',
                          'public/html/../libs/jquery/footable/v3/css/footable.bootstrap.min.css'],
      fullcalendar:   [   'public/html/../libs/jquery/moment/moment.js',
                          'public/html/../libs/jquery/fullcalendar/dist/fullcalendar.min.js',
                          'public/html/../libs/jquery/fullcalendar/dist/fullcalendar.css',
                          'public/html/../libs/jquery/fullcalendar/dist/fullcalendar.theme.css'],
      daterangepicker:[   'public/html/../libs/jquery/moment/moment.js',
                          'public/html/../libs/jquery/bootstrap-daterangepicker/daterangepicker.js',
                          'public/html/../libs/jquery/bootstrap-daterangepicker/daterangepicker-bs3.css'],
      tagsinput:      [   'public/html/../libs/jquery/bootstrap-tagsinput/dist/bootstrap-tagsinput.js',
                          'public/html/../libs/jquery/bootstrap-tagsinput/dist/bootstrap-tagsinput.css']
                      
    }
  )
  .constant('MODULE_CONFIG', [
      {
          name: 'ngGrid',
          files: [
              '../libs/angular/ng-grid/build/ng-grid.min.js',
              '../libs/angular/ng-grid/ng-grid.min.css',
              '../libs/angular/ng-grid/ng-grid.bootstrap.css'
          ]
      },
      {
          name: 'ui.grid',
          files: [
              '../libs/angular/angular-ui-grid/ui-grid.min.js',
              '../libs/angular/angular-ui-grid/ui-grid.min.css',
              '../libs/angular/angular-ui-grid/ui-grid.bootstrap.css'
          ]
      },
      {
          name: 'ui.select',
          files: [
              '../libs/angular/angular-ui-select/dist/select.min.js',
              '../libs/angular/angular-ui-select/dist/select.min.css'
          ]
      },
      {
          name:'angularFileUpload',
          files: [
            '../libs/angular/angular-file-upload/angular-file-upload.js'
          ]
      },
      {
          name:'ui.calendar',
          files: ['../libs/angular/angular-ui-calendar/src/calendar.js']
      },
      {
          name: 'ngImgCrop',
          files: [
              '../libs/angular/ngImgCrop/compile/minified/ng-img-crop.js',
              '../libs/angular/ngImgCrop/compile/minified/ng-img-crop.css'
          ]
      },
      {
          name: 'angularBootstrapNavTree',
          files: [
              '../libs/angular/angular-bootstrap-nav-tree/dist/abn_tree_directive.js',
              '../libs/angular/angular-bootstrap-nav-tree/dist/abn_tree.css'
          ]
      },
      {
          name: 'toaster',
          files: [
              '../libs/angular/angularjs-toaster/toaster.js',
              '../libs/angular/angularjs-toaster/toaster.css'
          ]
      },
      {
          name: 'textAngular',
          files: [
              '../libs/angular/textAngular/dist/textAngular-sanitize.min.js',
              '../libs/angular/textAngular/dist/textAngular.min.js'
          ]
      },
      {
          name: 'vr.directives.slider',
          files: [
              '../libs/angular/venturocket-angular-slider/build/angular-slider.min.js',
              '../libs/angular/venturocket-angular-slider/build/angular-slider.css'
          ]
      },
      {
          name: 'com.2fdevs.videogular',
          files: [
              '../libs/angular/videogular/videogular.min.js'
          ]
      },
      {
          name: 'com.2fdevs.videogular.plugins.controls',
          files: [
              '../libs/angular/videogular-controls/controls.min.js'
          ]
      },
      {
          name: 'com.2fdevs.videogular.plugins.buffering',
          files: [
              '../libs/angular/videogular-buffering/buffering.min.js'
          ]
      },
      {
          name: 'com.2fdevs.videogular.plugins.overlayplay',
          files: [
              '../libs/angular/videogular-overlay-play/overlay-play.min.js'
          ]
      },
      {
          name: 'com.2fdevs.videogular.plugins.poster',
          files: [
              '../libs/angular/videogular-poster/poster.min.js'
          ]
      },
      {
          name: 'com.2fdevs.videogular.plugins.imaads',
          files: [
              '../libs/angular/videogular-ima-ads/ima-ads.min.js'
          ]
      },
      {
          name: 'xeditable',
          files: [
              '../libs/angular/angular-xeditable/dist/js/xeditable.min.js',
              '../libs/angular/angular-xeditable/dist/css/xeditable.css'
          ]
      },
      {
          name: 'smart-table',
          files: [
              '../libs/angular/angular-smart-table/dist/smart-table.min.js'
          ]
      },
      {
          name: 'angular-skycons',
          files: [
              '../libs/angular/angular-skycons/angular-skycons.js'
          ]
      }
    ]
  )
  // oclazyload config
  .config(['$ocLazyLoadProvider', 'MODULE_CONFIG', function($ocLazyLoadProvider, MODULE_CONFIG) {
      // We configure ocLazyLoad to use the lib script.js as the async loader
      $ocLazyLoadProvider.config({
          debug:  false,
          events: true,
          modules: MODULE_CONFIG
      });
  }])
;

<?php require($_SERVER['DOCUMENT_ROOT'].'/app/views/partials/head.php'); ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/app/views/partials/nav.php'); ?>




    <!-- aside -->
  <aside id="aside" class="app-aside hidden-xs bg-dark">
      <div class="aside-wrap">
        <div class="navi-wrap">
          <!-- user -->
          <div class="clearfix hidden-xs text-center hide" id="aside-user">
            <div class="dropdown wrapper">
              <a href="app.page.profile">
                <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="img/a0.jpg" class="img-full" alt="...">
                </span>
              </a>
              <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt">John.Smith</strong> 
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">Art Director</span>
                </span>
              </a>
              <!-- dropdown -->
              <ul class="dropdown-menu animated fadeInRight w hidden-folded">
                <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
                  <span class="arrow top hidden-folded arrow-info"></span>
                  <div>
                    <p>300mb of 500mb used</p>
                  </div>
                  <div class="progress progress-xs m-b-none dker">
                    <div class="progress-bar bg-white" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                  </div>
                </li>
                <li>
                  <a href>Settings</a>
                </li>
                <li>
                  <a href="page_profile.html">Profile</a>
                </li>
                <li>
                  <a href>
                    <span class="badge bg-danger pull-right">3</span>
                    Notifications
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="login.view.php">Logout</a>
                </li>
              </ul>
              <!-- / dropdown -->
            </div>
            <div class="line dk hidden-folded"></div>
          </div>
          <!-- / user -->

          <!-- nav -->
          <nav ui-nav class="navi clearfix">
            <ul class="nav">
              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span>Navigation</span>
              </li>
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
                  <span class="font-bold">Dashboard</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Dashboard</span>
                    </a>
                  </li>
                  <li>
                    <a href="index.view.php">
                      <span>Dashboard v1</span>
                    </a>
                  </li>
                  <li>
                    <a href="dashboard.html">
                      <b class="label bg-info pull-right">N</b>
                      <span>Dashboard v2</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="mail.html">
                  <b class="badge bg-info pull-right">9</b>
                  <i class="glyphicon glyphicon-envelope icon text-info-lter"></i>
                  <span class="font-bold">Email</span>
                </a>
              </li>
              <li class="line dk"></li>

              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span>Components</span>
              </li>
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <b class="badge bg-info pull-right">3</b>
                  <i class="glyphicon glyphicon-th"></i>
                  <span>Layout</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Layout</span>
                    </a>
                  </li>
                  <li>
                    <a href="layout_app.html">
                      <span>Application</span>
                    </a>
                  </li>
                  <li>
                    <a href="layout_fullwidth.html">
                      <span>Full width</span>
                    </a>
                  </li>
                  <li>
                    <a href="layout_boxed.html">
                      <span>Boxed layout</span>
                    </a>
                  </li>      
                </ul>
              </li>
              <li>
                <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="glyphicon glyphicon-briefcase icon"></i>
                  <span>UI Kits</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>UI Kits</span>
                    </a>
                  </li>
                  <li>
                    <a href="ui_button.html">
                      <span>Buttons</span>
                    </a>
                  </li>
                  <li>
                    <a href="ui_icon.html">
                      <b class="badge bg-info pull-right">3</b>
                      <span>Icons</span>
                    </a>
                  </li>
                  <li>
                    <a href="ui_grid.html">
                      <span>Grid</span>
                    </a>
                  </li>
                  <li>
                    <a href="ui_widget.html">
                      <b class="badge bg-success pull-right">13</b>
                      <span>Widgets</span>
                    </a>
                  </li>
                  <li>
                    <a href="ui_sortable.html">
                      <span>Sortable</span>
                    </a>
                  </li>
                  <li>
                    <a href="ui_portlet.html">
                      <span>Portlet</span>
                    </a>
                  </li>
                  <li>
                    <a href="ui_timeline.html">
                      <span>Timeline</span>
                    </a>
                  </li>
                  <li>
                    <a href="ui_jvectormap.html">
                      <span>Vector Map</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <b class="label bg-primary pull-right">2</b>
                  <i class="glyphicon glyphicon-list"></i>
                  <span>Table</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Table</span>
                    </a>
                  </li>
                  <li>
                    <a href="table_static.html">
                      <span>Table static</span>
                    </a>
                  </li>
                  <li>
                    <a href="contacts.view.php">
                      <span>Datatable</span>
                    </a>
                  </li>
                  <li>
                    <a href="table_footable.html">
                      <span>Footable</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="glyphicon glyphicon-edit"></i>
                  <span>Form</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Form</span>
                    </a>
                  </li>
                  <li>
                    <a href="form_element.html">
                      <span>Form elements</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="ui_chart.html">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>Chart</span>
                </a>
              </li>
              <li>
                <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="glyphicon glyphicon-file icon"></i>
                  <span>Pages</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Pages</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_profile.html">
                      <span>Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_post.html">
                      <span>Post</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_search.html">
                      <span>Search</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_invoice.html">
                      <span>Invoice</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_price.html">
                      <span>Price</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_lockme.html">
                      <span>Lock screen</span>
                    </a>
                  </li>
                  <li>
                    <a href="login.view.php">
                      <span>Signin</span>
                    </a>
                  </li>
                  <li>
                    <a href="register.view.php">
                      <span>Signup</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_forgotpwd.html">
                      <span>Forgot password</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_404.html">
                      <span>404</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="line dk hidden-folded"></li>

              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">          
                <span>Your Stuff</span>
              </li>  
              <li>
                <a href="page_profile.html">
                  <i class="icon-user icon text-success-lter"></i>
                  <b class="badge bg-success pull-right">30%</b>
                  <span>Profile</span>
                </a>
              </li>
              <li>
                <a href>
                  <i class="icon-question icon"></i>
                  <span>Documents</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- nav -->

          <!-- aside footer -->
          <div class="wrapper m-t">
            <div class="text-center-folded">
              <span class="pull-right pull-none-folded">60%</span>
              <span class="hidden-folded">Milestone</span>
            </div>
            <div class="progress progress-xxs m-t-sm dk">
              <div class="progress-bar progress-bar-info" style="width: 60%;">
              </div>
            </div>
            <div class="text-center-folded">
              <span class="pull-right pull-none-folded">35%</span>
              <span class="hidden-folded">Release</span>
            </div>
            <div class="progress progress-xxs m-t-sm dk">
              <div class="progress-bar progress-bar-primary" style="width: 35%;">
              </div>
            </div>
          </div>
          <!-- / aside footer -->
        </div>
      </div>
  </aside>
  <!-- / aside -->


  <!-- content -->
  <div id="content" class="app-content" role="main">
  	<div class="app-content-body ">



<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Kontakty</h1>
</div>


        <div class="wrapper-md">

            <div class="panel panel-default">


                <div class="panel-heading">
                    Footable - make HTML tables on smaller devices look awesome
                </div>




                <div>

                    <table class="table" ui-jq="footable"  data-type="html" data-paging="true" data-sorting="true" data-filtering="true"  >
                    <thead>
                        <tr >
                            <th data-breakpoints="xs">Nazwa kontaktu</th>
                            <th>Nazwa firmy</th>
                            <th>Pozycja</th>
                            <th data-breakpoints="xs">Numer telefonu</th>
                            <th data-field="action" data-breakpoints="xs sm">Adres email</th>
                            <th data-field="action" data-formatter="actionFormatter" data-events="actionEvents">Action</th>
                        </tr>




                        <tbody>
                        <?php $ids = []; ?>
                        <?php foreach ($contactslist as $contact) : ?>

                            <?php array_push($ids, $contact->id); ?>

                        <div class="tableitem">
                            <tr>
                                <td ><?=$contact->username?></td>
                                <td><?=$contact->companyname?></td>
                                <td><?=$contact->position?></td>
                                <td><?=$contact->phonenumber?> </td>

                                <td>
                                    <button type="button" data-url="">Load rows 7501-10000</button>
                                </td>

                                <td class="kontakt<?=$contact->id?>"></td>
                            </tr>
                        </div>

                        <?php endforeach; ?></td>

                        <script>

                            function updateButtons() {
                                var php_ids = [<?= implode(", ", $ids); ?>];
                                var buttons = document.getElementsByClassName('edit ml10');

                                for (var i = 0; i < buttons.length; i++) {
                                    buttons[i].href = "/edit?id" + php_ids[i];
                                }
                            }

                        </script>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>




	</div>
  </div>
  <!-- /content -->



<?php require($_SERVER['DOCUMENT_ROOT'].'/app/views/partials/footer.php'); ?>

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
                    <a href="/companies">
                      <span>Companies</span>
                    </a>
                  </li>
                  <li>
                    <a href="/company">
                      <span>Add company</span>
                    </a>
                  </li>
                  <li>
                    <a href="/company_v2">
                      <span>Add company v2</span>
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
<!--   <div id="content" class="app-content" role="main">
  	<div class="app-content-body "> -->
	    

<!-- <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Companies</h1>
</div>
<div class="wrapper-md">
  <div class="panel panel-default">
    <div class="panel-heading">
      Data of companies
    </div> -->
    <!-- <div class="table-responsive"> -->
   <div class="container w-xxl w-auto-xs" ng-controller="SignupFormController"
         ng-init="app.settings.container = false;">
    <div class="m-b-lg">
<!--             <div class="wrapper text-center">
                <strong>Add Company</strong>
            </div> -->


            <!-- <form method="post" name="form" class="form-validation" action="/register"> -->
<!--                 <div class="text-danger wrapper text-center" ng-show="authError">

                </div> -->
    <form method="POST" name="form"  action="/company">
      <div class="text-danger wrapper text-center" ng-show="authError">
          <h3><?= $AddingStatus ?? ''; ?></h3>
      </div>
      <div class="list-group list-group-sm">
        <div class="list-group-item">
          <input name = "name_company" type="text" placeholder="Name" class="form-control no-border" maxlength="50" required>
        </div>

        <div class="list-group-item">
           <input name="address_company" type="text" placeholder="Address" class="form-control no-border" maxlength="50" required>
        </div>

        <div class="list-group-item">
           <input name="street_company" type="text" placeholder="Street" class="form-control no-border" maxlength="50" required>
        </div>

        <div class="list-group-item">
           <input name="city_company" type="text" placeholder="City" class="form-control no-border" maxlength="50" required>
        </div>
        <div class="list-group-item">
           <input name="country_company" type="text" placeholder="Country" class="form-control no-border" maxlength="50" required>
        </div>

        <div class="list-group-item">
           <input name="NIP_company" type="text" placeholder="NIP" class="form-control no-border" maxlength="10" required>
        </div>

        <div class="list-group-item">
           <input name="email_company" type="email" placeholder="Email" class="form-control no-border" maxlength="50" required>
        </div>
      </div>
      <div class="checkbox m-b-md m-t-none">
        <label class="i-checks">
            <input type="checkbox" ng-model="agree" required><i></i> Agree the <a href>terms and policy</a>
        </label>
      </div>
      <button type="submit" class="btn btn-lg btn-primary btn-block" ng-disabled='form.$invalid'>Add</button>
      <button type="reset" class="btn btn-lg btn-primary btn-block" >Clean</button>

    </form>

    </div>
    </div>

    <!--  -->
    	<!-- <h1>Add new company</h1>

		<form method="POST" action="/company">
		<ul style="list-style-type:none">
		<h3><?= $AddingStatus ?? ''; ?></h3>
			Company name: 
			<li><input type="text" name="name_company" maxlength="50" required ></li><br>
			Address of company:
			<li><input type="text" name="address_company" maxlength="50" required></li><br>
			Street:
			<li><input type="text" name="street_company" maxlength="50"></li><br>
			City:
			<li><input type="text" name="city_company" maxlength="50" required></li><br>
			Country:
			<li><input type="text" name="country_company" maxlength="50" required></li><br>
			NIP:
			<li><input type="text" name="NIP_company" maxlength="10"  required ></li><br>
			Email of the company:
			<li><input type="email" name="email_company" maxlength="50" required></li><br>
			<input value="checkbox" type="checkbox" required> Zgoda na przetwarzanie informacji.<br>
			<li><button type="submit" name="submit">Finish</button></li>
			<li><button type="reset">Clean</button></li>

		</ul>
	</form> -->
  </div>
</div>



	</div>
  </div>
  <!-- /content -->
  
  <!-- footer -->
  <footer id="footer" class="app-footer" role="footer">
    <div class="wrapper b-t bg-light">
      <span class="pull-right">2.2.0 <a href ui-scroll="app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span>
      &copy; 2016 Copyright.
    </div>
  </footer>
  <!-- / footer -->



</div>

<!-- <script src="../libs/jquery/jquery/dist/jquery.js"></script>
<script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<script src="js/ui-load.js"></script>
<script src="js/ui-jp.config.js"></script>
<script src="js/ui-jp.js"></script>
<script src="js/ui-nav.js"></script>
<script src="js/ui-toggle.js"></script>
<script src="js/ui-client.js"></script>
 -->
<!-- </body> -->
<?php require($_SERVER['DOCUMENT_ROOT'].'/app/views/partials/footer.php'); ?>
<!-- </html> -->

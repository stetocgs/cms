<?php require($_SERVER['DOCUMENT_ROOT'].'/app/views/partials/head.php'); ?>

<div class="container w-xxl w-auto-xs" ng-controller="SigninFormController" ng-init="app.settings.container = false;">
  <a href class="navbar-brand block m-t">Angulr</a>
  <div class="m-b-lg">
    <div class="wrapper text-center">

      <strong> <?=$callbackMessage ?? 'Sign in to get in touch'; ?> </strong>

    </div>


    <form method="POST" name="form"  action="/login">
      <div class="text-danger wrapper text-center" ng-show="authError">
          
      </div>
      <div class="list-group list-group-sm">
        <div class="list-group-item">
          <input name = "username" type="text" placeholder="Username" class="form-control no-border" required>
        </div>

        <div class="list-group-item">
           <input name="password" type="password" placeholder="Password" class="form-control no-border" required>
        </div>

      </div>
      <button type="submit" class="btn btn-lg btn-primary btn-block" ng-disabled='form.$invalid'>Log in</button>
      <!--<div class="text-center m-t m-b"><a ui-sref="access.forgotpwd">Forgot password?</a></div>-->
      <!--<div class="line line-dashed"></div>-->
      <p class="text-center"><small>Do not have an account?</small></p>
      <p class="text-center"><a href="/register">Create an account</a></p>
    </form>


  </div>
  <div class="text-center" ng-include="'tpl/blocks/page_footer.html'">
    <p>
  <small class="text-muted">Web app framework base on Bootstrap and AngularJS<br>&copy; 2014</small>
</p>
  </div>
</div>


<?php require($_SERVER['DOCUMENT_ROOT'].'/app/views/partials/footer.php'); ?>
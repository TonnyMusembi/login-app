<template>
  <div id="wrapper">
    <div id="layout-static">
      <div class="static-sidebar-wrapper sidebar-midnightblue">
        <div class="static-sidebar">
          <div class="sidebar">
            <div class="widget stay-on-collapse" id="widget-welcomebox">
              <div class="widget-body welcome-box tabular">
                <div class="tabular-row">
                  <div class="tabular-cell welcome-avatar">
                    <a href="#">
                      <img src="assets/demo/avatar/avatar_02.png" class="avatar" />
                    </a>
                  </div>
                  <div class="tabular-cell welcome-options">
                    <span class="welcome-text">Welcome,</span>
                    <a href="#" class="name">Jonathan Smith</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="widget stay-on-collapse" id="widget-sidebar">
              <div class="navbar-nav">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="collapse navbar-collapse">
                    <div class="navbar-nav">
                      <ul>
                        <li>
                          <router-link to="/allcompany" class="nav-item nav-link">Products List</router-link>
                        </li>
                        <li>
                          <router-link to="/create" class="nav-item nav-link">Create Product</router-link>
                        </li>
                        <li>
                          <router-link to="/all-medicine" class="nav-item nav-link">Medicine List</router-link>
                        </li>
                        <li>
                          <router-link
                            to="/create-medicine"
                            class="nav-item nav-link"
                          >Medicine create</router-link>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="static-content-wrapper">
        <div class="static-content">
          <router-view></router-view>
        </div>
        <footer role="contentinfo">
          <div class="clearfix">
            <ul class="list-unstyled list-inline pull-left">
              <li>
                <h6 style="margin: 0;">&copy; 2015 Avenger</h6>
              </li>
            </ul>
            <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top">
              <i class="fa fa-arrow-up"></i>
            </button>
          </div>
        </footer>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>


<script>
  var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
  var currentTheme = localStorage.getItem('theme');
  var mainHeader = document.querySelector('.main-header');
  var mainSidebar = document.querySelector('.main-sidebar');
  var table = document.querySelector('#table');


  if (currentTheme) {
    if (currentTheme === 'dark') {
      if (!document.body.classList.contains('dark-mode')) {
        document.body.classList.add("dark-mode");
      }
      if (mainHeader.classList.contains('navbar-light')) {
        mainHeader.classList.add('navbar-dark');
        mainHeader.classList.remove('navbar-light');
        mainSidebar.classList.add('navbar-dark');
        mainSidebar.classList.remove('navbar-light');
        table.classList.add('table-dark');
        document.getElementById("darklight").innerHTML = "Dark";
      }
      toggleSwitch.checked = true;
    }
  }

  function switchTheme(e) {
    if (e.target.checked) {
      if (!document.body.classList.contains('dark-mode')) {
        document.body.classList.add("dark-mode");
      }
      if (mainHeader.classList.contains('navbar-light')) {
        mainHeader.classList.add('navbar-dark');
        mainHeader.classList.remove('navbar-light');
        mainSidebar.classList.add('navbar-dark');
        mainSidebar.classList.remove('navbar-light');
        table.classList.add('table-dark');
        document.getElementById("darklight").innerHTML = "Dark";
      }
      localStorage.setItem('theme', 'dark');
    } else {
      if (document.body.classList.contains('dark-mode')) {
        document.body.classList.remove("dark-mode");
      }
      if (mainHeader.classList.contains('navbar-dark')) {
        mainHeader.classList.add('navbar-light');
        mainHeader.classList.remove('navbar-dark');
        mainSidebar.classList.add('navbar-light');
        mainSidebar.classList.remove('navbar-dark');
        table.classList.remove('table-dark');
        document.getElementById("darklight").innerHTML = "Light";
      }
      localStorage.setItem('theme', 'light');
    }
  }

  toggleSwitch.addEventListener('change', switchTheme, false);
</script>


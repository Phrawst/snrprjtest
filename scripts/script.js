$(document).ready(function(){
  $("#notiifyBtn").click(function(){
    $("#workSpace").load("https://phrawst.github.io/snrprjtest/notification.html");
  });
});

function w3_open() {
    document.getElementById("main").style.marginLeft = "25%";
    document.getElementById("sideMenu").style.width = "25%";
    document.getElementById("sideMenu").style.display = "block";
    document.getElementById("openNav").style.display = 'none';
  }
  function w3_close() {
    document.getElementById("main").style.marginLeft = "0%";
    document.getElementById("sideMenu").style.display = "none";
    document.getElementById("openNav").style.display = "inline-block";
  }

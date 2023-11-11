var countDownDate = new Date("NOV 11, 2023 2:00:00").getTime();
var x = setInterval(function () {
  var counter = document.getElementById("demo");
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("demo").innerHTML = days + "يوم " + hours + "ساعة  "
    + minutes + "دقيقة " + seconds + "ثانية ";
  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "لقد وصلت متاخرآ";
  }
}, 1000);





































var myModal = new bootstrap.Modal(document.getElementById('modal'), {
  Keyboard: false

})
win.addEventListener('click', function () {
  setTimeout(function () {
    myModal.show();
  }, 5000);
});

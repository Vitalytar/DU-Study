 <link rel="stylesheet" href="css/style.css">
 <script>
    function showNotification(options) {

      var notification = document.createElement('div');
      notification.className = "notification";
      if (options.cssText) {
        notification.style.cssText = options.cssText;
      }
      notification.style.top = (options.top || 0) + 'px';
      notification.style.right = (options.right || 0) + 'px';
      if (options.className) {
        notification.classList.add(options.className);
      }

      notification.innerHTML = options.html;
      document.body.appendChild(notification); // over cover

      setTimeout(function() {
        document.body.removeChild(notification);
      }, 1500);
    }

    // тест работоспособности
    var i = 0;
    setInterval(function() {
      showNotification({
        top: 10,
        right: 10,
        html: 'Привет ' + ++i,
        className: "welcome"
      });
    }, 2000);
  </script>
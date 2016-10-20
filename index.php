<html>
<head>
  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'></script>
  <script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(["init", {
      appId: "28aeb23e-1963-4bf2-a2f9-5d940d234ce2",
      safari_web_id: 'web.onesignal.auto.67c39979-7446-4274-a748-fcdf2406257a',
      autoRegister: true, /* Set to true to automatically prompt visitors */
      subdomainName: 'https://rohan.onesignal.com',   
      notifyButton: {
          enable: false /* Set to false to hide */
      }
    }]);
    OneSignal.push(function() {
    OneSignal.on('subscriptionChange', function(isSubscribed) {
        if (isSubscribed) {
          // The user is subscribed
          //   Either the user subscribed for the first time
          //   Or the user was subscribed -> unsubscribed -> subscribed
          OneSignal.getUserId( function(userId) {
            console.log(userId);
          });
        }
      });
    });
    
  </script>
</head>
<body>
<h1>One signal test</h1>

</body>
</html>
<html>
    <head>
        <title> PWA Unofficial </title>
        <link rel="manifest" href="manifest.json">
    </head>
    <body>
        

<!-- Content Here! -->
    <br>
    <h1> This is my PWA Unofficial </h1><hr>
    <p> ENROLLMENT </p><br>
    <p> REGISTRAR </p><br>
    <p> STUDENT PORTAL </p><br>
    <p> CRAD  </p><br>
    <p> PAYMENT MANAGEMENT SYSTEM </p><br>
    <p> GUIDANCE </p><br>
    <p> PROPERTY CUSTODIAN </p><br>
    <p> HUMAN RESOURCE </p><br>
    <p> CLINIC </p><br>
    <p> LOGISTIC MANAGEMENT SYSTEM </p><br>
    <p> QUALITY ASSURANCE </p><br>
    <p> PREFECT OF DISCIPLINE </p><br>
    <p> SAFETY AND SECURITY </p><br>
    <p> ACADEMIC MANAGEMENT SYSTEM </p><br>
    <p> FACULTY MANAGEMENT INFORMATION SYSTEM </p><br>
    <p> EVENT MANAGEMENT SYSTEM </p><br>
    <p> FINANCIALS </p><br>
    <p> MANAGEMENT INFORMATION SYSTEM </p><br>
  


    </body>

<!-- JS Script -->
    <script>
        window.addEventListener('load', () => {
          registerSW();
        });
     
        // Register the Service Worker
        async function registerSW() {
          if ('serviceWorker' in navigator) {
            try {
              await navigator
                    .serviceWorker
                    .register('serviceworker.js');
            }
            catch (e) {
              console.log('SW registration failed');
            }
          }
        }
     </script>

</html>
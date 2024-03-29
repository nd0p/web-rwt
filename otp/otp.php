<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>otp</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'>
  <link rel="stylesheet" href="otp.css">
</head>
<body>
  <section class="container-fluid bg-body-tertiary d-block">
  <div class="row justify-content-center">
      <div class="col-12 col-md-6 col-lg-4" style="min-width: 500px;">
        <div class="card bg-white mb-5 mt-5 border-0" style="box-shadow: 0 12px 15px rgba(0, 0, 0, 0.02);">
          <div class="card-body p-5 text-center">
            <h4>Verify</h4>
            <p>Your code was sent to you via email</p>

            <div class="otp-field mb-4">
              <input type="number" />
              <input type="number" disabled />
              <input type="number" disabled />
              <input type="number" disabled />
              <input type="number" disabled />
              <input type="number" disabled />
            </div>

            <button class="btn btn-primary mb-3">
              Verify
            </button>

            <p class="resend text-muted mb-0">
              Didn't receive code? <a href="">Request again</a>
            </p>
          </div>
        </div>
      </div>
    </div>
</section>
<script src="otp.js"></script>
</body>
</html>
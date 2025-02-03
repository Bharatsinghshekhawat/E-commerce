<!-- index.php -->
<?php include 'header.php'; ?>
<link rel="stylesheet" href="css.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .contact-info {
            margin-bottom: 1.5rem;
        }
        .contact-info i {
            font-size: 1.5rem;
            color: #007bff;
            margin-right: 0.5rem;
        }
        .adjust {
            margin-bottom: 1.5rem;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-dark {
            background-color: #343a40;
            border-color: #343a40;
        }
        .btn-dark:hover {
            background-color: #23272b;
            border-color: #1d2124;
        }
        .footer hr {
            border: 1px solid #dee2e6;
        }
        .footer .nav-link {
            color: #6c757d;
        }
        .footer .nav-link:hover {
            color: #007bff;
        }
    </style>
</head>
<body>

    <!-- Success message -->
    <div id="success-message" class="container mt-2 text-center" style="display: none;">
        <div class="alert alert-success" role="alert" style="background-color: rgb(211, 235, 244); color: green;">
            <h4>Information sent successfully</h4>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class="adjust">CONTACT DETAILS</h1>
                <div class="contact-info">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Address: 4578 Marmora Road, Glasgow</p>
                </div>
                <div class="contact-info">
                    <i class="fas fa-phone-alt"></i>
                    <p>Phone: (123) 456-7890</p>
                </div>
                <div class="contact-info">
                    <i class="fas fa-fax"></i>
                    <p>Fax: (123) 456-7891</p>
                </div>
                <div class="contact-info">
                    <i class="fas fa-envelope"></i>
                    <p>Email: info@demolink.org</p>
                </div>
                <div class="contact-info">
                    <i class="fas fa-clock"></i>
                    <p>Monday - Friday: 08.00 - 17.00</p>
                    <p>Saturday: 09.00 - 12.00</p>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="adjust">DROP US A LINE</h1>
                <form id="contact-form" action="https://formspree.io/f/xnnanyaj" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name *</label>
                        <input type="text" class="form-control" id="name" name="name" required
                            pattern="^[A-Z][a-zA-Z\s]*$"
                            title="Name should start with a capital letter and contain no numbers.">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email *</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea class="form-control" id="message" rows="4" name="message" required
                            minlength="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Send</button>
                </form>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>

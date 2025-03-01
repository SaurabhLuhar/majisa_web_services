<?php include '../includes/header.php'; ?>
<body>
    <?php include '../includes/navbar.php'; ?>
    
    <section id="contact">
        <h2>Contact Us</h2>
        <form action="../contact_form.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea name="message" required></textarea>
            
            <button type="submit">Send</button>
        </form>
    </section>
    
    <?php include '../includes/footer.php'; ?>
</body>
</html>

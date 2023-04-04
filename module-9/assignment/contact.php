<?php include "./header.php" ?>
    <main>
        <section class="contact">
            <div class="container">
                <div class="contact-area">
                    <div class="contact-form">
                        <div class="headline">
                            <h1>Send your message</h1>
                        </div>
                        <form action="submit.php" method="POST">
                            <label for="">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter your email">
                            <label for="">Subject</label>
                            <input type="text" name="subject" id="subject" placeholder="Enter subject">
                            <label for="">Message</label>
                            <textarea name="message" placeholder="Write a message" id="message" cols="20" rows="10"></textarea>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include "./footer.php" ?>
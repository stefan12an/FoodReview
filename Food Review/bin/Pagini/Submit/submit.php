<!doctype html>
<html lang="en">
<head>
    <title>PLM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/bin/css/submit.css">
</head>
<body>
<div class="container-fluid topnav">
    <a href="/bin/Pagini/Home Page/index.html">Home</a>
    <a class="active" href="/bin/Pagini/Submit/submit.php">Submit</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
</div>
<div class="container-fluid" id="head">
    <div class="header">
        <p><b>Food Review</b></p>
    </div>
</div>
<div class="container-fluid" style="background-color: whitesmoke">
    <div class="container" style="background-color: #00203FFF; border-radius: 10px">
        <form style="color: white;padding: 15px" action="action.php" method="POST">
            <div class="input-group mb-1">
                <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"
                              style="border-bottom-left-radius: 4px;border-top-left-radius: 4px">Username</span>
                    <input type="text" class="form-control" aria-label="Recipient's username"
                           aria-describedby="basic-addon2" name="user"
                           style="border-bottom-left-radius: 0px;border-top-left-radius: 0px">
                </div>
            </div>
            <br>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Reteta</span>
                </div>
                <textarea class="form-control" aria-label="Reteta" name="reteta"></textarea>
            </div>
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <br>
    <footer style="text-align: center; opacity: 0.5; ">
            <pre>Copyright © 2020 by Vinteler Mihai - Stefan
          All rights reserved. No part of this publication may be reproduced, distributed, or transmitted in any form or by any means,
                including photocopying, recording, or other electronic or mechanical methods,
                without the prior written permission of the publisher, except in the case of brief quotations embodied in
                critical reviews and certain other noncommercial uses permitted by copyright law.
                For permission requests, write to the publisher, addressed
            “Attention: Permissions Coordinator,” at the address below.
          </pre>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
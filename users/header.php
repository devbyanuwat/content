<div class="row">
    <div class="col " style="background-color: #0A1334;">
        <a href="" class="text-decoration-none ">
            <p class="text-end fs-5 text-white mt-3" style="background-color: #0A1334;"> </p>
        </a>
    </div>
    <div class="col" style="background-color: #0A1334; ">
        <a href="" class="text-decoration-none">
            <p class="text-start fs-5 text-white mt-3" style="background-color: #0A1334;"></p>
        </a>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../img/LOGO1 1.png" alt="" width="286px" height="99px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="status.php">Status</a>
                </li>

                <?php if ($_SESSION['ps_id'] == 2) { ?>
                    <li class="nav-item">
                        <a class=" mx-2 btn btn-outline-dark " href="member.php">Contents</a>
                    </li>

                <?php  } ?>
                <!-- <li class="nav-item">
                    <a class="nav-link mx-2" href="manage.php">Manage</a>
                </li> -->
                <?php if ($_SESSION['username'] == "") { ?>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="signin.php">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class=" btn btn-outline-dark mx-2" href="../add_user.php">Sign Up</a>
                    </li>
                <?php  } ?>

                <?php if ($_SESSION['username'] !== "") { ?>
                    <li class="nav-item">
                        <?php echo $_SESSION['username']; ?>
                    </li>
                    <li class="nav-item">
                        <a class=" btn btn-outline-danger mx-2" href="../backend/user/logout.php">Sign Out</a>
                    </li>
                <?php  } ?>
            </ul>

        </div>
    </div>
</nav>
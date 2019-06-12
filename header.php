

<style>

    /* desktop nav=========================================== */
    .desktopNavContainer{
        background-color: rgba(45, 40, 40, 1);
    }
    .desktopNavContainer a{
        color: white;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    /* mobile nav============================================ */
    .mobileNavContainer{
        background-color: rgba(45, 40, 40, 1);
        position: relative;
        display: none;
    }
    .mobileNavContainer .myLinks{
        display: none;
        position: absolute;
        width: 100%;
        top: 100%;
    }
    .mobileNavContainer a{
        color: white;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        display: block;
        background-color: #fcfbfa;
    }
    .mobileNavContainer .hamburgerIcon{
        background-color: transparent;
        display: block;
    }
    .mobileNavContainer a:hover{
        background-color: #e0e0e0;
    }

    /* both============================================ */
    nav{
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 99;
        border-bottom: 1px solid #a6a6a6;
    }
 

</style>

<!-- desktop nav menu -->
<div class='nav desktopNavContainer disp-flex align-items--center hide-tablet justify-content--center'>
        <a href="./index.php">About</a>
        <a href="./price.php">Menu</a>
        <a href="./contact.php">Reservations</a>
        <a href="./contact.php">Hours & Location</a>
</div>

<!-- mobile nav menu -->
<div class='nav mobileNavContainer disp-flex align-items--center show-tablet-flex justify-content--end'>
    <div class="myLinks">
        <a href="./index.php">About</a>
        <a href="./price.php">Menu</a>
        <a href="./contact.php">Reservations</a>
        <a href="./contact.php">Hours & Location</a>
    </div>
    <a href="javascript:void(0);" class='hamburgerIcon' aria-label="click to open mobile navigation menu">
        <i class="fas fa-bars"></i>
    </a>
</div>


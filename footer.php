<footer class="footer mb-2 mt-auto py-3 bg-light mt-md-5">
    <div class="container text-center">
        <span class="text-muted">Design and Developed by Pradyumn Vishwakarma &copy; 2022</span>
    </div>
</footer>
<script src="./assets/js/bootstrap.bundle.js"></script>
<script src="./assets/js/sweetalert.js"></script>
<?php
if (isset($_SESSION['status']) && $_SESSION['status'] != "") {
?>
    <script>
        swal({
            title: "<?php echo $_SESSION['status']; ?>",
            // text: "You clicked the button!",
            icon: "<?php echo $_SESSION['status_code']; ?>",
            button: "Done!",
        });
    </script>
<?php
    unset($_SESSION['status']);
}
?>

</body>

</html>
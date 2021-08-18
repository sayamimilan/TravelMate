<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="assets/js/sweetalert.js"></script>

<?php 
if(isset($_SESSION['status']) && $_SESSION['status'] != ''){
?>  
    <style>
        swal({
            title: "<?php echo $_SESSION['status']; ?>",
            icon: "<?php echo $_SESSION['status_code']; ?>",
            button: "OK",
        });
    </style>
<?php
    unset($_SESSION['status']);
}
?>
<!-- Header Part File -->
<?php require 'template-parts/header.php'; ?>

<!-- Entry Content -->
<?php include 'content/calgary.php'; ?>


<!-- Delete theme classes that controls width and spacing -->
<script>
const columns = document.querySelector('#body .columns')
const column = document.querySelector('#body .column')

if (columns || column) {
    columns.classList.remove('columns');
    column.classList.remove('column');
}
</script>

<!-- Animate on Scroll  -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({
    easing: 'ease-out-back',
    duration: 800
});
</script>
<!-- @end  Animate on Scroll  -->

<!-- Footer Part File -->
<?php require 'template-parts/footer.php'; ?>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<?php
// Dynamically load the content view
if (isset($content)) {
    echo view($content);
} else {
    echo '<p>Content view not specified.</p>';
}
?>

<?php include 'footer.php'; ?>

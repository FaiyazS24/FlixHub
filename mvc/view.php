
<?php
class View {
    public function showHeader() {
        include 'views/header.php'; //Views header.php
    }
    public function showFooter() {
        include 'views/footer.php'; //Views footer.php
    }

    public function renderDashboard($model, $successMessage, $errorMessage) {
        include 'views/messages.php'; //Views messages.php
        include 'views/dashboard.php'; //Views dashboard.php
    }

    public function renderRegister($successMessage, $errorMessage) {
        include 'views/messages.php'; //Views messages.php
        include 'views/register_view.php'; //Views register_view.php
    }
    public function renderLogin($successMessage, $errorMessage) {
        include 'views/messages.php'; //Views messages.php
        include 'views/login_view.php'; //Views login_view.php
    }
    
    
    
}
?>

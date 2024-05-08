angular.module('registrationApp', [])
    .controller('RegistrationController', function ($scope) {
        $scope.user = {};

        $scope.submitForm = function () {
            // Process form submission here
            console.log('Form submitted with data:', $scope.user);
            // You can send this data to a backend server for further processing
            
            // Clear the form data after submission
            $scope.user = {};
            // Reset the form validation state
            $scope.registrationForm.$setPristine();
            $scope.registrationForm.$setUntouched();
        };
    });
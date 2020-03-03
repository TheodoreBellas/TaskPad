/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
require("datatables.net-bs4");
require("datatables.net-responsive-bs4");
require("@fortawesome/fontawesome-free");

// We aren't using Vue at the moment, but we might in the future, so let's
// disable it for now

// window.Vue = require('vue');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// const app = new Vue({
//     el: '#app',
// });

/* jQuery Starts Here */

$(function() {
    // Initialize DataTables
    $("table.dt").DataTable();

    // Initialize Tooltips
    $('[data-toggle="tooltip"]').tooltip();

    // Task Log Modal Link Functionality
    $("a.open-task-log-modal").click(function() {
        var name = $(this).data("task-name");
        var id = $(this).data("task-id");
        $("#task-log-title").text(name);
        $("#task-id").val(id);
        $("#task-log-modal").modal("show");
    });

    // Live Timer Functionality
    $("#timer-start").click(function() {
        $(this).hide("fast", function() {
            $("#timer-stop, #timer-pause, .timer-info")
                .removeClass("d-none")
                .show();
        });

        var timer_state = $("#timer-content").data("state");
        if (timer_state == "paused") {
            $("#timer-content").timer("resume");
        } else {
            $("#timer-content").timer({
                // seconds: "60", // debug for saving times other than 0
            });
        }

        $("#timer-content").data("timer-start", new Date().toLocaleString());
    });

    $("#timer-pause").click(function() {
        $("#timer-content").timer("pause");
        $(this).hide("fast", function() {
            $("#timer-start").show();
        });
    });
    

    $("#timer-stop").click(function() {
        // $("#timer-content").timer('pause');

        $(this).hide("fast", function() {
            $("#timer-pause").hide();

            $("#timer-start").show();
        });

        var seconds = $("#timer-content").data("seconds");
        if (seconds > 60) {
            var time_to_store = seconds / 60;
        } else {
            var time_to_store = 0;
        }

        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            },
            type: "POST",
            url: "/task-logs",
            data: {
                project_id: $("#timer-stop").data("project-id"),
                task_id: $("#timer-stop").data("project-id"),
                duration_minutes: time_to_store,
                timer_start: $("#timer-content").data("timer-start"),
                async: true
            },
            success: function(data) {
                alert("Data stored successfully!");
                $("#timer-content").timer("remove");
                console.log("Timer state: ", $("#timer-content").data("state"));
                $(".timer-info").hide();
            },
            failure: function(error) {
                alert("Failed! Reason: ", error);
            }
        });
    });
});

/* jQuery Ends Here */

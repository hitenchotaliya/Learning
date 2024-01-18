
$(document).ready(function () {


    //Load Data from php
    function loadTable() {
        $.ajax({
            url: "ajax-load.php",
            type: "POST",
            // data: {page_no :page },
            success: function (data) {
                $("#table-data").html(data);

            }
        });
    }

    loadTable();//Callling function so without click run

    //Hidding input form
    function hideInputForm() {

        $("#table-form").hide();
    }
    hideInputForm();

    //Show input form when click
    $("#insert-button").on("click", function () {
        $("#table-form").show();
    })

    // $("#insert-button").on("click", function (e) {
    //     $.ajax({
    //         url: "ajax-load.php",
    //         type: "POST",
    //         success: function (data) {
    //             $("#table-data").html(data);
    //         }
    //     });
    // });

    //Unload table data //Hide data
    $("#close-button").on("click", function (e) {
        $("#table-data").empty();
    });

    //Delete
    $(document).on("click", "#delete-btn", function () {
        if (confirm("Do you really want to delete this record?")) {
            var Id = $(this).data("id");
            var element = this;

            $.ajax({
                url: "delete.php",
                type: "POST",
                data: { id: Id },
                success: function (data) {
                    if (data == 1) {
                        $(element).closest("tr").fadeOut();
                    } else {
                        alert("Cant Delete record");
                    }
                }
            });
        }
    });

    //Edit get
    $(document).on("click", "#edit-btn", function () {
        $("#modal").show();
        var Id = $(this).data("id");

        $.ajax({
            url: "edit.php",
            type: "POST",
            data: { id: Id },
            success: function (data) {
                $("#modal-form table").html(data);
            }
        });
    });

    //Edit Post
    $(document).on("click", "#edit-submit", function () {
        var Id = $("#id-edit").val();
        var fname = $("#fname-edit").val();
        var lname = $("#lname-edit").val();

        $.ajax({
            url: "edit-post.php",
            type: "POST",
            data: { id: Id, fname: fname, lname: lname },
            success: function (data) {
                if (data == 1) {
                    $("#modal").hide();
                    loadTable();
                }
            }
        });
    });

    //Close form
    $("#close-btn").on("click", function (e) {
        $("#modal").hide();
    });


    //Insert Data
    $("#save-button").on("click", function (e) {
        e.preventDefault();
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        if (fname == "" || lname == "") {
            $(".Errormsg").html("All field are require").slideDown();
            $(".Successmsg").slideUp();
        } else {
            $.ajax({
                url: "ajaxInsert.php",
                type: "POST",
                data: { first_name: fname, last_name: lname },
                success: function (data) {
                    if (data == 1) {
                        loadTable();
                        hideInputForm();
                        $("#addForm").trigger("reset");
                        $(".Successmsg").html("Data inserted sucessfully").slideUp();
                        $(".Errormsg").slideUp();

                    } else {
                        $(".Errormsg").html("cant save record").slideDown();
                        $(".Successmsg").slideUp();
                    }
                }
            });
        }
    });

    //Live Search
    $("#search").on("keyup",function(){
        var search_term =$(this).val();

        $.ajax({
            url: "liveSearch.php",
            type: "POST",
            data: {search:search_term },
            success:function(data){
                $("#table-data").html(data);
            }
        });
    })

    //  //Pagination Code
    //  $(document).on("click","#pagination a",function(e) {
    //     e.preventDefault();
    //     var page_id = $(this).attr("id");
  
    //     loadTable(page_id);
    //   })
});


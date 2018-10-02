@extends('layouts.app')

@section('content')

<br>
<div class="uk-container uk-container-large" style="background-color:white;">
    <div class="uk-container uk-container-medium">

        <form>
            <div class="uk-grid-match uk-margin" uk-grid>

                <div class=" uk-width-1-4@m">
                    <div style="padding:10px;" class="uk-card uk-card-default uk-card-body">
                        <div class="uk-margin">

                            <input class="uk-input uk-width-1-1" id="invnumber" type="text" placeholder="Invoice Number">
                            <input id="formtext" class="uk-input uk-width-1-1" type="date" placeholder="Date of invoice"
                                value="<?php echo date('Y-m-d'); ?>">
                            <input id="formtext" class="uk-input uk-width-1-1" type="text" placeholder="Name"
                                autocomplete="off">
                            <input id="formtext" class="uk-input uk-width-1-1" type="number" placeholder="Phone number"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                type="number" maxlength="10" autocomplete="off">

                        </div>
                    </div>
                </div>

                <div class="uk-width-expand@m">
                    <form class="uk-grid-small" uk-grid>

                        <div class="uk-width-1-4">
                            <select class="uk-input" id="employee" style="overflow:scroll;">
                                <option value="" selected="selected">Select Items Name</option>
    
                            </select>




                        </div>
                        <div class="uk-width-1-6@s">
                            <div class="records">
                                <input autocomplete="off" id="retailprice" style="margin-bottom:20px; font-size:13px; margin-left:10px;"
                                    class="uk-input" type="number" onkeyup="sum();" required>

                            </div>
                        </div>
                        <div class="uk-width-1-6@s">
                            <input id="quantity" style="margin-bottom:20px; margin-left:20px; font-size:13px;" class="uk-input"
                                type="number" placeholder="Quantity" onkeyup="sum();" autocomplete="off">
                        </div>
                        <div class="uk-width-1-6@s">
                            <div class="uk-margin">
                                <input id="tax" autocomplete="off" style="margin-bottom:20px; margin-left:30px; font-size:13px;"
                                    class="uk-input" placeholder="Tax" onkeyup="sum();">
                            </div>
                        </div>
                        <input type="hidden" id="subTotal" name="subTotal">

                        <div class="uk-width-1-6@s">
                            <button type="button" id="add-row" style=" margin-left:40px; background-color:#28baba; color:white; border:none; border-radius:5px; font-weight:bold;"
                                class="uk-button" onclick="getFocus()">Add</button>
                        </div>
                        <input type="hidden" id="subtotal" name="subtotal">

                    </form>
                    <div style="padding:10px; " class="uk-card uk-card-default uk-card-body">

                        <table id="myTable" style="font-size:13px; margin-bottom:0px;" class="uk-table uk-table-small uk-table-divider ">
                            <thead>
                                <tr>
                                    <th id="tableheading" style="width:20px; color:#1359a0;">#</th>
                                    <th id="tableheading" style="width:10px; color:#1359a0;"></th>
                                    <th id="tableheading" style="width:390px; color:#1359a0;">Items</th>
                                    <th id="tableheading" style="width:100px; color:#1359a0;">Unit Price</th>
                                    <th id="tableheading" style="width:60px; color:#1359a0;">Quantity</th>
                                    <th id="tableheading" style="width:60px; color:#1359a0;">Tax</th>
                                    <th id="tableheading" style="width:60px; color:#1359a0;">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <div style="margin-top:10px;">
                            <a id="delete-row" style="background-color:#b20023; color:white;  border:none; border-radius:5px; font-weight:bold;"
                                class="uk-button">delete</a>
                            <div class="uk-margin">
                                <div class="uk-form-controls uk-form-controls-text" style="font-size:12px; font-weight:bold; ">
                                    <label><input class="uk-radio" type="radio" name="radio1"> Take Away</label>
                                    <label><input class="uk-radio" type="radio" name="radio1" checked> Eat Here</label>
                                </div>
                            </div>
                        </div>
                        <div style="padding:10px; border-radius:5px; font-size:12px; background-color:#f7f8f9; color:#1359a0; font-weight:bold; width:175px; float:right;">
                            <p style="margin-bottom:0px;">Net total <span style="float:right; " id="val"></span></p>
                            <p style="padding:0px;  font-weight:normal; margin-top:0px; margin-bottom:0px;">Tax <span
                                    style="float:right;">$50</span></p>
                            <p style="padding:0px; font-size: 20px;  margin-top:0px; margin-bottom:0px;">Total <span
                                    style="float:right;">$50</span></p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-form-controls uk-form-controls-text" style="font-size:12px; font-weight:bold; float:right; ">
                    <label><input class="uk-radio" type="radio" name="radio1" checked> Cash</label>
                    <label><input class="uk-radio" type="radio" name="radio1"> Card</label>
                </div>
            </div> <br>
            <button type="button" style="float:right; background-color:#cecece; color:#1359a0; border:none; border-radius:5px; font-weight:bold;"
                class="uk-button uk-button-default uk-margin">Save & Print</button>

            <button type="submit" style="float:right; margin-right:10px; background-color:#cecece; color:#1359a0; border:none; border-radius:5px; font-weight:bold;"
                class="uk-button uk-button-default uk-margin">Save</button>
        </form>

    </div>

</div>
@endsection
@section("script")

    <script type="text/javascript">
        function invoiceNumber() {
            document.getElementById("invnumber").value = document.getElementById("invnumber").innerHTML = "IN" +
                Math.floor(Math.random() * 1000000001);
        } 

        var table = document.getElementById("table"), sumVal = 0;

        for (var i = 1; i < table.rows.length; i++) {
            sumVal = sumVal + parseInt(table.rows[i].cells[6].innerHTML);
        }

        document.getElementById("val").innerHTML = "Sum Value = " + sumVal;
        console.log(sumVal); 

   
        $(document).ready(function () {
            $("#add-row").click(function (myFunc) {
                var employee = $("#employee").val();
                var retailprice = $("#retailprice").val();
                var quantity = $("#quantity").val();
                var tax = $("#tax").val();
                var subtotal = $("#subtotal").val();
                var markup = "<tr><td>&nbsp;</td><td>" + "<input class='uk-checkbox' type='checkbox' name='record'>" + "</td><td>" + employee + "</td><td>" + retailprice + "</td><td>" + quantity + "</td><td>" + tax + "</td><td>" + subtotal + "</td></tr>";
                $("table tbody").append(markup);
            });

            // Find and remove selected table rows
            $("#delete-row").click(function () {
                $("table tbody").find('input[name="record"]').each(function () {
                    if ($(this).is(":checked")) {
                        $(this).parents("tr").remove();
                    }
                });
            });
        });    
       
        function sum() {
            var price = document.getElementById('retailprice').value;
            var quantity = document.getElementById('quantity').value;
            var tax = document.getElementById('tax').value;
            var result = parseInt(price) * parseInt(quantity);

            //	var withTax = result * 0.18;
            if (!isNaN(result)) {
                document.getElementById('subtotal').value = result;  /* + withTax;*/
                //	  document.getElementById('tax').value = withTax;
            }
        }

        function addRowCount(tableAttr) {
            $(tableAttr).each(function () {
                $('th:first-child, thead td:first-child', this).each(function () {
                    var tag = $(this).prop('tagName');
                    $(this).before('<' + tag + '>#</' + tag + '>');
                });
                $('td:first-child', this).each(function (i) {
                    $(this).before('<td>' + (i + 1) + '</td>');
                });
            });
        }
 
        addRowCount('myTable');

        function getFocus() {
            document.getElementById("employee").focus();
        }

    </script>

@endsection
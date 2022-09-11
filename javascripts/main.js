
import {dvdInput, bookInput, furnitureInput} from './inputs.js'

    $(function () {
        $.ajax({
            type: "post",
            url: "../classes/Types.php",
            data: "data",
            dataType: "json",
            success: function (response) {
                response.forEach(element => {
                    $('#productType').append(
                        `
                        <option value="${element.type}">${element.type}</option>
                        `
                    )
                });
            }
        });

            $.ajax({
                type: "post",
                url: "../classes/ProductController.php",
                data: "data",
                dataType: "json",
                success: function (response) {
                    response.forEach(element => {
                        $('#showProducts').append(
                            `
                                <div class="card text-center mx-2 mb-2" style="width: 16rem;">
                                        <input class="form-check-input mt-2 delete-checkbox" type="checkbox" value="${element.id}" id="delete-checkbox" name="delete-checkbox[]">
                                    <div class="card-body">
                                        <h5 class="card-title">${element.sku}</h5>
                                        <h6 class="card-title">${element.name}</h6>
                                        <p class="card-text mb-2">${parseFloat(element.price).toFixed(2)} $</p>
                                        <p class="card-text mb-1" id="attribute">
                                        ${element.type_id == 1 ? 'Size: ' : element.type_id == 2 ? 'Dimension: ' : 'Weight: '}${element.attribute}
                                        </p>
                                    </div>
                                </div>
                            `
                        )
                    });
                }
            });
        
        $('#productType').on('click', function(e){
            e.preventDefault()
            if($('#productType').val() === "DVD"){
                    $('#dvd').html(dvdInput)
                    $('#dvd').css('display', 'flex')
                    $('#book').css('display', 'none')
                    $('#furniture').css('display', 'none')
                }else if($('#productType').val() === "Furniture"){
                    $('#furniture').html(furnitureInput)
                    $('#dvd').css('display', 'none')
                    $('#furniture').css('display', 'flex')
                    $('#book').css('display', 'none')
                }else if($('#productType').val() === "Book"){
                    $('#book').html(bookInput)
                    $('#dvd').css('display', 'none')
                    $('#book').css('display', 'flex')
                    $('#furniture').css('display', 'none')
                }else {
                    $('#dvd').css('display', 'none')
                    $('#book').css('display', 'none')
                    $('#furniture').css('display', 'none')
                }
        })
    })

    
<?php
/**
 * Template Name: Calculator page
 */

get_header(); ?>

<div class="page-wrapper">
    <div class="box">
        <div class="calculator-page">
            <div class="calculator">
                <h2>CUBIC FEET CALCULATOR</h2>
                <p>CalState Moving & Storage and its professional movers have a <br> combined total of 10 years in the moving industry.</p>
                <div class="calculator-box">
                    <table>
                        <tr class="calculator-headertable">
                            <th align="left">Article</th>
                            <th align="center">Quantity</th>
                            <th align="center">Cubic Feet</th>
                            <th align="center">Qty x CFt</th>
                        </tr>
                        <tr>
                            <td>A/C, window</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_1' maxlength=3 onKeyUp='calc_string(1, 15)' onMouseUp='calc_string(1, 15)'>
                            </td>
                            <td align="center">15</td>
                            <td align="center"><span id='qty_cft_1'>0</span></td>
                        </tr>
                        <tr>
                            <td>Armoire</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_2' maxlength=3 onKeyUp='calc_string(2, 40)' onMouseUp='calc_string(2, 40)'>
                            </td>
                            <td align="center">40</td>
                            <td align="center"><span id='qty_cft_2'>0</span></td>
                        </tr>
                        <tr>
                            <td>Bed, single</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_3' maxlength=3 onKeyUp='calc_string(3, 40)' onMouseUp='calc_string(3, 40)'>
                            </td>
                            <td align="center">40</td>
                            <td align="center"><span id='qty_cft_3'>0</span></td>
                        </tr>
                        <tr>
                            <td>Bed, double/queen</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_4' maxlength=3 onKeyUp='calc_string(4, 60)' onMouseUp='calc_string(4, 60)'>
                            </td>
                            <td align="center">60</td>
                            <td align="center"><span id='qty_cft_4'>0</span></td>
                        </tr>
                        <tr>
                            <td>Bed, King</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_5' maxlength=3 onKeyUp='calc_string(5, 70)' onMouseUp='calc_string(5, 70)'>
                            </td>
                            <td align="center">70</td>
                            <td align="center"><span id='qty_cft_5'>0</span></td>
                        </tr>
                        <tr>
                            <td>Bench</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_6' maxlength=3 onKeyUp='calc_string(6, 5)' onMouseUp='calc_string(6, 5)'>
                            </td>
                            <td align="center">5</td>
                            <td align="center"><span id='qty_cft_6'>0</span></td>
                        </tr>
                        <tr>
                            <td>Bike/Wagon/Toys</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_7' maxlength=3 onKeyUp='calc_string(7, 10)' onMouseUp='calc_string(7, 10)'>
                            </td>
                            <td align="center">10</td>
                            <td align="center"><span id='qty_cft_7'>0</span></td>
                        </tr>
                        <tr>
                            <td>Bookcase/Cabinet</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_8' maxlength=3 onKeyUp='calc_string(8, 20)' onMouseUp='calc_string(8, 20)'>
                            </td>
                            <td align="center">20</td>
                            <td align="center"><span id='qty_cft_8'>0</span></td>
                        </tr>
                        <tr>
                            <td>Buffet/Creddenza</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_9' maxlength=3 onKeyUp='calc_string(9, 30)' onMouseUp='calc_string(9, 30)'>
                            </td>
                            <td align="center">30</td>
                            <td align="center"><span id='qty_cft_9'>0</span></td>
                        </tr>
                        <tr>
                            <td>Cabinet</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_10' maxlength=3 onKeyUp='calc_string(10, 15)' onMouseUp='calc_string(10, 15)'>
                            </td>
                            <td align="center">15</td>
                            <td align="center"><span id='qty_cft_10'>0</span></td>
                        </tr>
                        <tr>
                            <td>Chair, straight</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_11' maxlength=3 onKeyUp='calc_string(11, 5)' onMouseUp='calc_string(11, 5)'>
                            </td>
                            <td align="center">5</td>
                            <td align="center"><span id='qty_cft_11'>0</span></td>
                        </tr>
                        <tr>
                            <td>Chair, with arms</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_12' maxlength=3 onKeyUp='calc_string(12, 10)' onMouseUp='calc_string(12, 10)'>
                            </td>
                            <td align="center">10</td>
                            <td align="center"><span id='qty_cft_12'>0</span></td>
                        </tr>
                        <tr>
                            <td>Chair, overstuffed</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_13' maxlength=3 onKeyUp='calc_string(13, 25)' onMouseUp='calc_string(13, 25)'>
                            </td>
                            <td align="center">25</td>
                            <td align="center"><span id='qty_cft_13'>0</span></td>
                        </tr>
                        <tr>
                            <td>Chest/Trunk</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_14' maxlength=3 onKeyUp='calc_string(14, 12)' onMouseUp='calc_string(14, 12)'>
                            </td>
                            <td align="center">12</td>
                            <td align="center"><span id='qty_cft_14'>0</span></td>
                        </tr>
                        <tr>
                            <td>China Hutch, 2pc</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_15' maxlength=3 onKeyUp='calc_string(15, 50)' onMouseUp='calc_string(15, 50)'>
                            </td>
                            <td align="center">50</td>
                            <td align="center"><span id='qty_cft_15'>0</span></td>
                        </tr>
                        <tr>
                            <td>Crib</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_16' maxlength=3 onKeyUp='calc_string(16, 20)' onMouseUp='calc_string(16, 20)'>
                            </td>
                            <td align="center">20</td>
                            <td align="center"><span id='qty_cft_16'>0</span></td>
                        </tr>
                        <tr>
                            <td>Desk</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_17' maxlength=3 onKeyUp='calc_string(17, 30)' onMouseUp='calc_string(17, 30)'>
                            </td>
                            <td align="center">30</td>
                            <td align="center"><span id='qty_cft_17'>0</span></td>
                        </tr>
                        <tr>
                            <td>Dresser, single</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_18' maxlength=3 onKeyUp='calc_string(18, 30)' onMouseUp='calc_string(18, 30)'>
                            </td>
                            <td align="center">30</td>
                            <td align="center"><span id='qty_cft_18'>0</span></td>
                        </tr>
                        <tr>
                            <td>Dresser, double</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_19' maxlength=3 onKeyUp='calc_string(19, 40)' onMouseUp='calc_string(19, 40)'>
                            </td>
                            <td align="center">40</td>
                            <td align="center"><span id='qty_cft_19'>0</span></td>
                        </tr>
                        <tr>
                            <td>Dresser, triple</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_20' maxlength=3 onKeyUp='calc_string(20, 50)' onMouseUp='calc_string(20, 50)'>
                            </td>
                            <td align="center">50</td>
                            <td align="center"><span id='qty_cft_20'>0</span></td>
                        </tr>
                        <tr>
                            <td>Exersize Equipment</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_21' maxlength=3 onKeyUp='calc_string(21, 20)' onMouseUp='calc_string(21, 20)'>
                            </td>
                            <td align="center">20</td>
                            <td align="center"><span id='qty_cft_21'>0</span></td>
                        </tr>
                        <tr>
                            <td>Grandfather Clock</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_22' maxlength=3 onKeyUp='calc_string(22, 20)' onMouseUp='calc_string(22, 20)'>
                            </td>
                            <td align="center">20</td>
                            <td align="center"><span id='qty_cft_22'>0</span></td>
                        </tr>
                        <tr>
                            <td>Ladder/Tools</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_23' maxlength=3 onKeyUp='calc_string(23, 2)' onMouseUp='calc_string(23, 2)'>
                            </td>
                            <td align="center">2</td>
                            <td align="center"><span id='qty_cft_23'>0</span></td>
                        </tr>
                        <tr>
                            <td>Lamp</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_24' maxlength=3 onKeyUp='calc_string(24, 3)' onMouseUp='calc_string(24, 3)'>
                            </td>
                            <td align="center">3</td>
                            <td align="center"><span id='qty_cft_24'>0</span></td>
                        </tr>
                        <tr>
                            <td>Lawn Mower</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_25' maxlength=3 onKeyUp='calc_string(25, 15)' onMouseUp='calc_string(25, 15)'>
                            </td>
                            <td align="center">15</td>
                            <td align="center"><span id='qty_cft_25'>0</span></td>
                        </tr>
                        <tr>
                            <td>Mirror</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_26' maxlength=3 onKeyUp='calc_string(26, 3)' onMouseUp='calc_string(26, 3)'>
                            </td>
                            <td align="center">3</td>
                            <td align="center"><span id='qty_cft_26'>0</span></td>
                        </tr>
                        <tr>
                            <td>Microwave</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_27' maxlength=3 onKeyUp='calc_string(27, 5)' onMouseUp='calc_string(27, 5)'>
                            </td>
                            <td align="center">5</td>
                            <td align="center"><span id='qty_cft_27'>0</span></td>
                        </tr>
                        <tr>
                            <td>Ottoman</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_28' maxlength=3 onKeyUp='calc_string(28, 5)' onMouseUp='calc_string(28, 5)'>
                            </td>
                            <td align="center">5</td>
                            <td align="center"><span id='qty_cft_28'>0</span></td>
                        </tr>
                        <tr>
                            <td>Piano, upright</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_29' maxlength=3 onKeyUp='calc_string(29, 60)' onMouseUp='calc_string(29, 60)'>
                            </td>
                            <td align="center">60</td>
                            <td align="center"><span id='qty_cft_29'>0</span></td>
                        </tr>
                        <tr>
                            <td>Piano, grand</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_30' maxlength=3 onKeyUp='calc_string(30, 70)' onMouseUp='calc_string(30, 70)'>
                            </td>
                            <td align="center">70</td>
                            <td align="center"><span id='qty_cft_30'>0</span></td>
                        </tr>
                        <tr>
                            <td>Picture / Large</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_31' maxlength=3 onKeyUp='calc_string(31, 3)' onMouseUp='calc_string(31, 3)'>
                            </td>
                            <td align="center">3</td>
                            <td align="center"><span id='qty_cft_31'>0</span></td>
                        </tr>
                        <tr>
                            <td>Refrigerator/Freezer</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_32' maxlength=3 onKeyUp='calc_string(32, 60)' onMouseUp='calc_string(32, 60)'>
                            </td>
                            <td align="center">60</td>
                            <td align="center"><span id='qty_cft_32'>0</span></td>
                        </tr>
                        <tr>
                            <td>Rug</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_33' maxlength=3 onKeyUp='calc_string(33, 10)' onMouseUp='calc_string(33, 10)'>
                            </td>
                            <td align="center">10</td>
                            <td align="center"><span id='qty_cft_33'>0</span></td>
                        </tr>
                        <tr>
                            <td>Serving Cart</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_34' maxlength=3 onKeyUp='calc_string(34, 15)' onMouseUp='calc_string(34, 15)'>
                            </td>
                            <td align="center">15</td>
                            <td align="center"><span id='qty_cft_34'>0</span></td>
                        </tr>
                        <tr>
                            <td>Slide/Lrg Toy</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_35' maxlength=3 onKeyUp='calc_string(35, 20)' onMouseUp='calc_string(35, 20)'>
                            </td>
                            <td align="center">20</td>
                            <td align="center"><span id='qty_cft_35'>0</span></td>
                        </tr>
                        <tr>
                            <td>Sofa. sect, per sect</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_36' maxlength=3 onKeyUp='calc_string(36, 25)' onMouseUp='calc_string(36, 25)'>
                            </td>
                            <td align="center">25</td>
                            <td align="center"><span id='qty_cft_36'>0</span></td>
                        </tr>
                        <tr>
                            <td>Sofa, 2 cushion</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_37' maxlength=3 onKeyUp='calc_string(37, 35)' onMouseUp='calc_string(37, 35)'>
                            </td>
                            <td align="center">35</td>
                            <td align="center"><span id='qty_cft_37'>0</span></td>
                        </tr>
                        <tr>
                            <td>Sofa, 3 cushion</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_38' maxlength=3 onKeyUp='calc_string(38, 50)' onMouseUp='calc_string(38, 50)'>
                            </td>
                            <td align="center">50</td>
                            <td align="center"><span id='qty_cft_38'>0</span></td>
                        </tr>
                        <tr>
                            <td>Stove/Dishwasher</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_39' maxlength=3 onKeyUp='calc_string(39, 30)' onMouseUp='calc_string(39, 30)'>
                            </td>
                            <td align="center">30</td>
                            <td align="center"><span id='qty_cft_39'>0</span></td>
                        </tr>
                        <tr>
                            <td>Swings, outdoor</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_40' maxlength=3 onKeyUp='calc_string(40, 60)' onMouseUp='calc_string(40, 60)'>
                            </td>
                            <td align="center">60</td>
                            <td align="center"><span id='qty_cft_40'>0</span></td>
                        </tr>
                        <tr>
                            <td>Table, end/coffee</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_41' maxlength=3 onKeyUp='calc_string(41, 10)' onMouseUp='calc_string(41, 10)'>
                            </td>
                            <td align="center">10</td>
                            <td align="center"><span id='qty_cft_41'>0</span></td>
                        </tr>
                        <tr>
                            <td>Table, kitchen</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_42' maxlength=3 onKeyUp='calc_string(42, 20)' onMouseUp='calc_string(42, 20)'>
                            </td>
                            <td align="center">20</td>
                            <td align="center"><span id='qty_cft_42'>0</span></td>
                        </tr>
                        <tr>
                            <td>Table, dining</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_43' maxlength=3 onKeyUp='calc_string(43, 30)' onMouseUp='calc_string(43, 30)'>
                            </td>
                            <td align="center">30</td>
                            <td align="center"><span id='qty_cft_43'>0</span></td>
                        </tr>
                        <tr>
                            <td>Television</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_44' maxlength=3 onKeyUp='calc_string(44, 25)' onMouseUp='calc_string(44, 25)'>
                            </td>
                            <td align="center">25</td>
                            <td align="center"><span id='qty_cft_44'>0</span></td>
                        </tr>
                        <tr>
                            <td>Television Stand</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_45' maxlength=3 onKeyUp='calc_string(45, 10)' onMouseUp='calc_string(45, 10)'>
                            </td>
                            <td align="center">10</td>
                            <td align="center"><span id='qty_cft_45'>0</span></td>
                        </tr>
                        <tr>
                            <td>Wall Unit, per pc</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_46' maxlength=3 onKeyUp='calc_string(46, 35)' onMouseUp='calc_string(46, 35)'>
                            </td>
                            <td align="center">35</td>
                            <td align="center"><span id='qty_cft_46'>0</span></td>
                        </tr>
                        <tr>
                            <td>Washer / Dryer</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_47' maxlength=3 onKeyUp='calc_string(47, 30)' onMouseUp='calc_string(47, 30)'>
                            </td>
                            <td align="center">30</td>
                            <td align="center"><span id='qty_cft_47'>0</span></td>
                        </tr>
                        <tr>
                            <td>Waredrobes</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_48' maxlength=3 onKeyUp='calc_string(48, 15)' onMouseUp='calc_string(48, 15)'>
                            </td>
                            <td align="center">15</td>
                            <td align="center"><span id='qty_cft_48'>0</span></td>
                        </tr>
                        <tr>
                            <td>Boxes, client small</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_49' maxlength=3 onKeyUp='calc_string(49, 4)' onMouseUp='calc_string(49, 4)'>
                            </td>
                            <td align="center">4</td>
                            <td align="center"><span id='qty_cft_49'>0</span></td>
                        </tr>
                        <tr>
                            <td>Boxes, client large</td>
                            <td>
                                <input type='text' placeholder="0" id='qty_50' maxlength=3 onKeyUp='calc_string(50, 6)' onMouseUp='calc_string(50, 6)'>
                            </td>
                            <td align="center">6</td>
                            <td align="center"><span id='qty_cft_50'>0</span></td>
                        </tr>
                        <input type='hidden' id='num_articles' value='50'>
                    </table>
                    <div class="total-box">
                        <div class="total">
                            <div class="total__item">
                                <div class="feet-total">
                                    <div class="total-header">Cubic Feet Total:</div>
                                    <div class="total-summ">10000000</div>
                                </div>
                            </div>
                            <div class="total__item">
                                <div class="weight-total">
                                    <div class="total-header">Total Weight:</div>
                                    <div class="total-summ">0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.calculator-box -->
            </div><!-- /.calculator -->
        </div><!-- /.calculator-page -->
    </div><!-- /.box -->
</div><!-- /.page-wrapper -->

<?php get_footer(); ?>

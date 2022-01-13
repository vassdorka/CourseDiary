<div class="calcCard" id="calc">

    <div class="innerDiv">

        <div class="btnDiv">
            <button  id="closeBtn" class="closeButton" onclick="closeCalcCard()">X</button>
        </div>
        <div>
            <h1>Semester calculations:</h1>
        </div>

        <div class="imgDiv">
            <img src="" alt="">
        </div>

        <?php

                
                echo '<div class="creditInfos">
                        <h3>Number of completed credits of: </h3>
                        <ul>
                            <li>
                                <h4 class="infLabel">All courses: </h4>
                                <h4 class="creditNum">'; include "infoPhpFiles/totalCredit.php"; echo' credit</h4>
                            </li>
                            <li>
                                <h4 class="infLabel">Compulsory courses: </h4>
                                <h4 class="creditNum">'; include "infoPhpFiles/compulsoryCredit.php"; echo' credit</h4>
                            </li>
                            <li>
                                <h4 class="infLabel">Required optional courses: </h4>
                                <h4 class="creditNum">'; include "infoPhpFiles/requiredOptionalCredit.php"; echo' credit</h4>
                            </li>
                            <li>
                                <h4 class="infLabel">Optional courses: </h4>
                                <h4 class="creditNum">'; include "infoPhpFiles/optionalCredit.php"; echo' credit</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="avarageInfos">
                        <h3>Avarage values: </h3>
                        <ul>
                            <li>
                                <h4 class="infLabel"> Grade-point average: </h4>
                                <h4 class="creditNum">'; include "infoPhpFiles/gradePointAverage.php"; echo'</h4>
                            </li>
                            <li>
                                <h4 class="infLabel"> Credit index: </h4>
                                <h4 class="creditNum">'; include "infoPhpFiles/creditIndex.php"; echo'</h4>
                            </li>
                            <li>
                                <h4 class="infLabel">Corrected Credit index: </h4>
                                <h4 class="creditNum">'; include "infoPhpFiles/corectedCreditIndex.php"; echo'</h4>
                            </li>
                            <li>
                                <h4 class="infLabel">Regular avarage: </h4>
                                <h4 class="creditNum">'; include "infoPhpFiles/avarage.php"; echo'</h4>
                            </li>                              
                        </ul>
                    </div>';  

        ?>
    </div>
    
</div>
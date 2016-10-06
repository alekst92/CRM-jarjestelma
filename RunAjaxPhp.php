} elseif ($scripttype == "SelectProspect") {

        if ($database->executeSQL("begin") == false) {  //begin transaction
                echo "ERROR";
                return;
        }
         
        $sqlErrors = false;
        $returnAllColumns = false;
        $resultStr = "";

        $pProspectID = $_GET["ProspectID"];
        $pEntity = $_GET["Entity"];

        if (empty($pEntity) || empty($pProspectID)) {
                $sqlErrors = true;
        } else {       

                $tempData = $database->selectEntity("prospect", $pProspectID);

                if ($pEntity == "ChangeContactType") {
                        $resultStr .= "|"."prospect_prospectid"."^".$pProspectID;
                        $resultStr .= "|"."custom_newmemorectype"."^"."Prospect";

                        $tCompanyID = $tempData["prospect.companyid"];

                        $sql = "select CompName FROM Company WHERE CompanyID = '$tCompanyID' AND OrgID = '".$database->orgid."'";
                        $tNewCompName = $database->getValFromDB($sql, 1);

                        $resultStr .= "|"."custom_newcompname"."^".$tNewCompName;
                }        

                if ($returnAllColumns) {
                        foreach($tempData as $tColName => $tVal) {
                                
                                $tColName    = str_replace(".", "_", $tColName);
                                
                                $resultStr .= "|".$tColName."^".$tVal;
                        }
                }
        }        

        if ($sqlErrors) {
                $database->executeSQL("rollback");  //rollback transaction
                $result = "ERROR";
        } else {
                $database->executeSQL("commit");  //commit transaction

                $result = "OK".$resultStr;
                //$database->write_log("c:/tmp/1.log", $resultStr);
        }
        
        echo $result;

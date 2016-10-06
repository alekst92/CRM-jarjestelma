        //Prospect table
        $columnMetaData = array();
        $columnMetaData["prospect.prospectid"] = array("pk","text","16",FALSE,"");
        $columnMetaData["prospect.companyid"] = array("fk","text","16",TRUE,"");
        $columnMetaData["prospect.productid"] = array("fk","text","16",TRUE,"");
        $columnMetaData["prospect.projectid"] = array("fk","text","16",TRUE,"");
        $columnMetaData["prospect.personid"] = array("fk","text","16",TRUE,"");
        $columnMetaData["prospect.localvalue"] = array("data","decimal","0",TRUE,"");
        $columnMetaData["prospect.projectname"] = array("data","text","100",TRUE,"");
        
        $columnMetaData["prospect.acctmgrid"] = array("fk","text","16",TRUE,"");
        $columnMetaData["prospect.inssalesid"] = array("fk","text","16",TRUE,"");
        $columnMetaData["prospect.supportid"] = array("fk","text","16",TRUE,"");
        $columnMetaData["prospect.comment1"] = array("data","text","512",TRUE,"");
        $columnMetaData["prospect.prosrcid"] = array("fk","text","16",TRUE,"");
        $columnMetaData["prospect.statusid"] = array("fk","text","16",TRUE,"");
        $columnMetaData["prospect.totvalue"] = array("data","decimal","0",TRUE,"");
        $columnMetaData["prospect.closepercent"] = array("fk","integer","10",TRUE,"5");
        $columnMetaData["prospect.nextaction"] = array("data","text","512",TRUE,"");
        $columnMetaData["prospect.datefound"] = array("data","date","0",TRUE,"");
        $columnMetaData["prospect.closingdate"] = array("data","date","0",TRUE,"");
        $columnMetaData["prospect.currencyid"] = array("fk","text","16",TRUE,"");
        $columnMetaData["prospect.weightvalue"] = array("data","decimal","0",TRUE,"");
        $columnMetaData["prospect.locweightedval"] = array("data","decimal","0",TRUE,"");
        $columnMetaData["prospect.prorectype"] = array("data","text","16",TRUE,"");

        $columnMetaData["prospect.oppmemo"] = array("data","memolarge","170",TRUE,"");
        //$columnMetaData["prospect.oppmemo"] = array("data","memo","",TRUE,"");
        $columnMetaData["prospect.offerheader"] = array("data","memosmall","",TRUE,"","");
        $columnMetaData["prospect.offerheading"] = array("data","memo","0",TRUE,"");
        $columnMetaData["prospect.offerfooter"] = array("data","memo","0",TRUE,"");

        $columnMetaData["prospect.reasonforwin"] = array("data","memo","0",TRUE,"");
        $columnMetaData["prospect.reasonforloss"] = array("data","memo","0",TRUE,"");
        $columnMetaData["prospect.winlossreasonid"] = array("fk","text","16",TRUE,"");

        $columnMetaData["prospect.strengths"] = array("data","memo","0",TRUE,"");
        $columnMetaData["prospect.weaknesses"] = array("data","memo","0",TRUE,"");
        $columnMetaData["prospect.opportunities"] = array("data","memo","0",TRUE,"");
        $columnMetaData["prospect.treaths"] = array("data","memo","0",TRUE,"");
        $columnMetaData["prospect.otherproducts"] = array("data","text","50",TRUE,"");
        $columnMetaData["prospect.competition"] = array("data","text","50",TRUE,"");
        $columnMetaData["prospect.problem"] = array("data","text","50",TRUE,"");

        $columnMetaData["prospect.projfinished"] = array("data","text","1",FALSE,"'N'");

        $columnMetaData["prospect.invcreated"] = array("data","text","1",FALSE,"'N'");
        $columnMetaData["prospect.invcreadate"] = array("data","date","0",FALSE,"");
        $columnMetaData["prospect.invcreator"] = array("fk","text","16",FALSE,"");
        $columnMetaData["prospect.invoiceid"] = array("fk","text","16",FALSE,"");

        $columnMetaData["prospect.trainlocationid"] = array("fk","text","16",TRUE,"");
        $columnMetaData["prospect.prospectfk2"] = array("fk","text","16",TRUE,"");
        $columnMetaData["prospect.trainquantity"] = array("data","decimal","0",TRUE,"");
        $columnMetaData["prospect.trainduration"] = array("data","decimal","0",TRUE,"");
        $columnMetaData["prospect.supportpct"] = array("data","decimal","0",TRUE,"");
        $columnMetaData["prospect.support2pct"] = array("data","decimal","0",TRUE,"");
        $columnMetaData["prospect.support3pct"] = array("data","decimal","0",TRUE,"");
        $columnMetaData["prospect.royaltyval"] = array("data","decimal","0",TRUE,"");
        $columnMetaData["prospect.evalresult"] = array("data","text","100",TRUE,"");
        $columnMetaData["prospect.accmgrpct"] = array("data","decimal","0",TRUE,"");

        $columnMetaData["prospect.provpct"] = array("data","decimal","0",TRUE,"");
        $columnMetaData["prospect.provcost"] = array("data","decimal","0",TRUE,"");
        $columnMetaData["prospect.leadregdate"] = array("data","date","0",TRUE,"");
        $columnMetaData["prospect.forecastdate"] = array("data","date","0",TRUE,"");
        $columnMetaData["prospect.trainstartdate"] = array("data","date","0",TRUE,"");
        $columnMetaData["prospect.trainenddate"] = array("data","date","0",TRUE,"");
        $columnMetaData["prospect.datecol1"] = array("data","date","0",TRUE,"");   //Case Type (Delivery Date)
        $columnMetaData["prospect.datecol2"] = array("data","date","0",TRUE,"");

        $columnMetaData["prospect.prospectfk1"] = array("fk","text","16",TRUE,"");    //Case Type (Device Supplier-vertical)
        $columnMetaData["prospect.numcol1"] = array("data","decimal","0",TRUE,""); //Rental period (Device Supplier-vertical)

        $columnMetaData["prospect.budgetavail"] = array("fk","text","1",TRUE,"");    //Budget Available
        $columnMetaData["prospect.budcheckdate"] = array("data","date","0",TRUE,"");    //Date Budget Checked
        $columnMetaData["prospect.budcheckperson"] = array("data","text","256",TRUE,"");    //Budget Checked With Person
        $columnMetaData["prospect.budcomment"] = array("data","text","256",TRUE,"");    //Budget Comment

        
        $columnMetaData["prospect.creadate"] = array("data","datetime","0",FALSE,"getdate()");
        $columnMetaData["prospect.createdby"] = array("fk","text","16",FALSE,"'@userid'");
        $columnMetaData["prospect.moddate"] = array("data","datetime","0",FALSE,"getdate()");
        $columnMetaData["prospect.modifiedby"] = array("fk","text","16",FALSE,"'@userid'");
        $columnMetaData["prospect.orgid"] = array("fk","text","16",FALSE,"'@orgid'");
        $columnMetaData["prospect.isdeleted"] = array("data","text","1",FALSE,"'N'");
        $this->endTable("prospect", $columnMetaData);

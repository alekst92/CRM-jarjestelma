        //prospect
        $ENT = $this->newEnt("prospect","","","","346", "PROS"); // Prospect
        $ENT->enableSettings = 1;
        $ENT->enableHyperlinks = 1;
        $ENT->datalevel = 3;
        $ENT->protectionmethod = "ROLE";
        $ENT->enableExportListviews = true;
        $ENT->enableListviews       = true;
        $ENT->EnableRowLimits = true;
        $ENT->insertAction = "reload";
        $ENT->updateAction = "reload";
        $ENT->EnableRecentItems("1454", "select c.compname, r.prodname from prospect left outer join product as r on prospect.productid = r.productid, company as c where prospect.prospectid = '@entitykey@' and prospect.companyid = c.companyid");

        $ENT->enableCopyEntity = true;
        $ENT->AddCopyEntityElement("comment1", "prospect", "Comment1 || ' *COPY*'"); //Comment
        $ENT->AddCopyEntitySegment("caseproduct", "caseproduct", "41"); //Products
        $ENT->AddCopyEntitySegment("document", "externallink", "268"); //Documents
        $ENT->AddCopyEntitySegment("contact", "contact", "582"); //Persons Involved

        $ENT->StartSegment("prospect_caseproduct", "", "", "");
        $ENT->CURRSEG->displayname   = "41";
        $ENT->EndSegment();
        $ENT->StartSegment("prospect_memofile", "", "", "", false, false, "memofile");
        $ENT->CURRSEG->displayname   = "410";
        $ENT->AddListSegmentOption("custom.onlyactivebt", "1450","N");                // Only active
        $ENT->AddListSegmentOption("custom.onlymybt", "        1449","N");                // My only
        $ENT->AddListSegmentOption("custom.textformatfk","287","left:50","onChange");        // Memo
        $ENT->AddListSegmentOption("custom.extendedviewfk","Contacts","N","onChange");        // 
        $ENT->AddListSegmentOption("custom.todosortfk","1518","nextcontdate desc","onChange"); // Sort order
        $ENT->EndSegment();

        $ENT->StartSegment("prospect_prospphase", "list", "Prospect Phases", "2", true, true, "", false);

        $ENT->AddListElement("vwprospphase.phasename","Phase");
        $ENT->AddListElement("vwprospphase.phasestatusdesc","Status","",0,"");
        $ENT->AddListElement("vwprospphase.phasestart","Start","",0,"");                
        $ENT->AddListElement("vwprospphase.phaseend","End","",0,""); 
        $ENT->AddListElement("vwprospphase.usrname","User","",0,""); 
        $ENT->AddListElement("vwprospphase.phasedesc","Comment","",0,"left:70");

        $ENT->CURRSEG->ListTable   = "vwprospphase";
        $ENT->CURRSEG->ListCols    = " vwprospphase.phasename,vwprospphase.phasestatusdesc,vwprospphase.phasestart,vwprospphase.phaseend,vwprospphase.usrname,vwprospphase.phasedesc";
        $ENT->CURRSEG->ListJoins   = " INNER JOIN prospect ON prospect.prospectid = '@entitykey@' and vwprospphase.prospectid = prospect.prospectid and vwprospphase.orgid = '@orgid@' and vwprospphase.isactive = 'Y' ";
        $ENT->CURRSEG->ListFilter  = "";
        $ENT->CURRSEG->ListOrderBy =  " ORDER BY vwprospphase.phaseseq, vwprospphase.phasename ";

        $ENT->EndSegment();        

        $ENT->StartSegment("prospect_memo", "", "", "");
        $ENT->CURRSEG->displayname   = "287";
        $ENT->EndSegment();
        $ENT->StartSegment("prospect_document", "", "", "", false, false, "document");
        $ENT->CURRSEG->displayname   = "268";
        $ENT->EndSegment();
        $ENT->StartSegment("prospect_contact", "", "", "", false, false, "person");
        $ENT->CURRSEG->displayname   = "582";
        $ENT->EndSegment();
        $ENT->StartSegment("prospect_swot", "", "", "");
        $ENT->CURRSEG->displayname   = "SWOT";
        $ENT->EndSegment();
        $ENT->StartSegment("prospect_offertexts", "", "", "");
        $ENT->CURRSEG->displayname   = "2319"; // Offer Texts
        $ENT->EndSegment();
        
        $ENT->StartSegment("prospect_history", "", "", "");
        $ENT->CURRSEG->displayname   = "621";
        $ENT->EndSegment();

        
        $ENT->enableMassUpdate = 1;
        $ENT->AddMassUpdateElement("prospect.closingdate", "603", "prospect", "N"); //CloseDate
        $ENT->AddMassUpdateElement("prospect.forecastdate", "2363", "prospect", "N"); //Forecast Date
        $ENT->AddMassUpdateElement("prospect.statusid", "105", "prospect", "N");  //Status code
        $ENT->AddMassUpdateElement("prospect.acctmgrid", "591", "prospect", "N");  //Opportunity mgr
       
        
        $this->endEnt($ENT);

        $ENT->onloadJavaScriptFunction = "initScript()";
        $ENT->addJavaScript("

                function initScript() {
//                        popCalInit(); //Init Calendar controls

                        var fEstSalesCur = document.dataform.salesbudget_estcurrencyid;
                        var fActSalesCur = document.dataform.salesbudget_actcurrencyid;

                        if (fEstSalesCur.value != '' && fActSalesCur.value == '') {  // if Currency set by default when adding new record
                                updActSalesCurrency();
                        }
                }

                function updBudQuarter() {
                
                        var fBudmonth = document.dataform.salesbudget_budmonth;
                        var fBudmQuarter = document.dataform.salesbudget_budquarter;

                        if (fBudmonth.value > 0 && fBudmonth.value < 4) {
                                fBudmQuarter.value = 1;
                        } else if (fBudmonth.value > 3 && fBudmonth.value < 7) {
                                fBudmQuarter.value = 2;
                        } else if (fBudmonth.value > 6 && fBudmonth.value < 10) {
                                fBudmQuarter.value = 3;
                        } else if (fBudmonth.value > 9 && fBudmonth.value < 13) {
                                fBudmQuarter.value = 4;
                        }
                }

                function updActSalesCurrency() {
                
                        var fEstSalesCur = document.dataform.salesbudget_estcurrencyid;
                        var fActSalesCur = document.dataform.salesbudget_actcurrencyid;

                        fActSalesCur.value = fEstSalesCur.value;

                        updEstSalesLoc();
                        updActSalesLoc();
                }

                function updEstSalesLoc() {
                
                        var fEstSalesCur = document.dataform.salesbudget_estcurrencyid;
                        var fEstSales    = document.dataform.salesbudget_estsales;
                        var fEstSalesLoc = document.dataform.salesbudget_estsalesloc;

                        var fCurrencyid  = fEstSalesCur.value;
                        
                        if (document.forms['dataform'].salesbudget_currencyrate === undefined) {
                                var fCurrencyrate = 1;
                        } else {
                                var fCurrencyrate = getListBoxVal(document.forms['dataform'].salesbudget_currencyrate, fCurrencyid, 1.00);
                        }
                        
                        fEstSalesLoc.value = Number(fEstSales.value) * Number(fCurrencyrate);

                        fEstSalesLoc.value = parseFloat(fEstSalesLoc.value).toFixed(2);

                        updActSalesPct();
                        
                }

                function updActSalesLoc() {
                
                        var fActSalesCur = document.dataform.salesbudget_actcurrencyid;
                        var fActSales    = document.dataform.salesbudget_actsales;
                        var fActSalesLoc = document.dataform.salesbudget_actsalesloc;

                        var fCurrencyid  = fActSalesCur.value;
                        
                        if (document.forms['dataform'].salesbudget_currencyrate === undefined) {
                                var fCurrencyrate = 1.00;
                        } else {
                                var fCurrencyrate = getListBoxVal(document.forms['dataform'].salesbudget_currencyrate, fCurrencyid, 1.00);
                        }

                        fActSalesLoc.value = Number(fActSales.value) * Number(fCurrencyrate);

                        fActSalesLoc.value = parseFloat(fActSalesLoc.value).toFixed(2);

                        updActSalesPct();
                }

                function updActSalesPct() {
                
                        var fActSalesPct = document.dataform.salesbudget_actsalespct;
                        var fActSales    = document.dataform.salesbudget_actsales;
                        var fActSalesLoc = document.dataform.salesbudget_actsalesloc;
                        var fEstSalesLoc = document.dataform.salesbudget_estsalesloc;

                        if (fEstSalesLoc.value > 0) {
                                fActSalesPct.value = Number(fActSalesLoc.value) * 100 / Number(fEstSalesLoc.value);
                        } else {
                                fActSalesPct.value = 100;
                        }
                        
                        fActSalesPct.value = parseFloat(fActSalesPct.value).toFixed(2);
                }

                ");

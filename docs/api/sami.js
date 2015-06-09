(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '    <ul>                <li data-name="namespace:" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">SellerLabs</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="namespace:SellerLabs_Research" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="SellerLabs/Research.html">Research</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="namespace:SellerLabs_Research_Entities" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="SellerLabs/Research/Entities.html">Entities</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:SellerLabs_Research_Entities_CategoryMapping" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/Research/Entities/CategoryMapping.html">CategoryMapping</a>                    </div>                </li>                            <li data-name="class:SellerLabs_Research_Entities_FeesSet" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/Research/Entities/FeesSet.html">FeesSet</a>                    </div>                </li>                            <li data-name="class:SellerLabs_Research_Entities_Offer" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/Research/Entities/Offer.html">Offer</a>                    </div>                </li>                            <li data-name="class:SellerLabs_Research_Entities_SearchProduct" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/Research/Entities/SearchProduct.html">SearchProduct</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:SellerLabs_Research_Exceptions" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="SellerLabs/Research/Exceptions.html">Exceptions</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:SellerLabs_Research_Exceptions_EmptyResultsException" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/Research/Exceptions/EmptyResultsException.html">EmptyResultsException</a>                    </div>                </li>                            <li data-name="class:SellerLabs_Research_Exceptions_InvalidFormatException" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/Research/Exceptions/InvalidFormatException.html">InvalidFormatException</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:SellerLabs_Research_Interfaces" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="SellerLabs/Research/Interfaces.html">Interfaces</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:SellerLabs_Research_Interfaces_ResearchClientInterface" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/Research/Interfaces/ResearchClientInterface.html">ResearchClientInterface</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:SellerLabs_Research_Responses" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="SellerLabs/Research/Responses.html">Responses</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:SellerLabs_Research_Responses_FeesResponse" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/Research/Responses/FeesResponse.html">FeesResponse</a>                    </div>                </li>                            <li data-name="class:SellerLabs_Research_Responses_GetAsinCategoriesResponse" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/Research/Responses/GetAsinCategoriesResponse.html">GetAsinCategoriesResponse</a>                    </div>                </li>                            <li data-name="class:SellerLabs_Research_Responses_GetCategoryByIdResponse" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/Research/Responses/GetCategoryByIdResponse.html">GetCategoryByIdResponse</a>                    </div>                </li>                            <li data-name="class:SellerLabs_Research_Responses_OffersResponse" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/Research/Responses/OffersResponse.html">OffersResponse</a>                    </div>                </li>                            <li data-name="class:SellerLabs_Research_Responses_SearchResponse" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/Research/Responses/SearchResponse.html">SearchResponse</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:SellerLabs_Research_FormatUtils" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="SellerLabs/Research/FormatUtils.html">FormatUtils</a>                    </div>                </li>                            <li data-name="class:SellerLabs_Research_ResearchClient" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="SellerLabs/Research/ResearchClient.html">ResearchClient</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    {"type": "Namespace", "link": "SellerLabs.html", "name": "SellerLabs", "doc": "Namespace SellerLabs"},{"type": "Namespace", "link": "SellerLabs/Research.html", "name": "SellerLabs\\Research", "doc": "Namespace SellerLabs\\Research"},{"type": "Namespace", "link": "SellerLabs/Research/Entities.html", "name": "SellerLabs\\Research\\Entities", "doc": "Namespace SellerLabs\\Research\\Entities"},{"type": "Namespace", "link": "SellerLabs/Research/Exceptions.html", "name": "SellerLabs\\Research\\Exceptions", "doc": "Namespace SellerLabs\\Research\\Exceptions"},{"type": "Namespace", "link": "SellerLabs/Research/Interfaces.html", "name": "SellerLabs\\Research\\Interfaces", "doc": "Namespace SellerLabs\\Research\\Interfaces"},{"type": "Namespace", "link": "SellerLabs/Research/Responses.html", "name": "SellerLabs\\Research\\Responses", "doc": "Namespace SellerLabs\\Research\\Responses"},
            {"type": "Interface", "fromName": "SellerLabs\\Research\\Interfaces", "fromLink": "SellerLabs/Research/Interfaces.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "doc": "&quot;Interface ResearchClientInterface&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_generateCode", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::generateCode", "doc": "&quot;Generate an authorization code for NodeMWS&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_getOffers", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::getOffers", "doc": "&quot;Get the current offers for an ASIN from NodeMWS&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_getFees", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::getFees", "doc": "&quot;Call the fees endpoint of NodeMWS and return the response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_getSearch", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::getSearch", "doc": "&quot;Search the catalog and return the response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_getAsinCategories", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::getAsinCategories", "doc": "&quot;Get categories for an ASIN&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_getCategoryById", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::getCategoryById", "doc": "&quot;Get a category by ID&quot;"},
            
            
            {"type": "Class", "fromName": "SellerLabs\\Research\\Entities", "fromLink": "SellerLabs/Research/Entities.html", "link": "SellerLabs/Research/Entities/CategoryMapping.html", "name": "SellerLabs\\Research\\Entities\\CategoryMapping", "doc": "&quot;Class CategoryMapping&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\CategoryMapping", "fromLink": "SellerLabs/Research/Entities/CategoryMapping.html", "link": "SellerLabs/Research/Entities/CategoryMapping.html#method___construct", "name": "SellerLabs\\Research\\Entities\\CategoryMapping::__construct", "doc": "&quot;Construct an instance of a CategoryMapping&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\CategoryMapping", "fromLink": "SellerLabs/Research/Entities/CategoryMapping.html", "link": "SellerLabs/Research/Entities/CategoryMapping.html#method_isMainCategory", "name": "SellerLabs\\Research\\Entities\\CategoryMapping::isMainCategory", "doc": "&quot;Return whether or not the category is a main category&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\CategoryMapping", "fromLink": "SellerLabs/Research/Entities/CategoryMapping.html", "link": "SellerLabs/Research/Entities/CategoryMapping.html#method_getCategoryId", "name": "SellerLabs\\Research\\Entities\\CategoryMapping::getCategoryId", "doc": "&quot;Get the ID of a category&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\CategoryMapping", "fromLink": "SellerLabs/Research/Entities/CategoryMapping.html", "link": "SellerLabs/Research/Entities/CategoryMapping.html#method_getCategory", "name": "SellerLabs\\Research\\Entities\\CategoryMapping::getCategory", "doc": "&quot;Get the category name&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\Research\\Entities", "fromLink": "SellerLabs/Research/Entities.html", "link": "SellerLabs/Research/Entities/FeesSet.html", "name": "SellerLabs\\Research\\Entities\\FeesSet", "doc": "&quot;Class FeesSet&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\FeesSet", "fromLink": "SellerLabs/Research/Entities/FeesSet.html", "link": "SellerLabs/Research/Entities/FeesSet.html#method___construct", "name": "SellerLabs\\Research\\Entities\\FeesSet::__construct", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\FeesSet", "fromLink": "SellerLabs/Research/Entities/FeesSet.html", "link": "SellerLabs/Research/Entities/FeesSet.html#method_getAmazonCommission", "name": "SellerLabs\\Research\\Entities\\FeesSet::getAmazonCommission", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\FeesSet", "fromLink": "SellerLabs/Research/Entities/FeesSet.html", "link": "SellerLabs/Research/Entities/FeesSet.html#method_getAmazonVar", "name": "SellerLabs\\Research\\Entities\\FeesSet::getAmazonVar", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\FeesSet", "fromLink": "SellerLabs/Research/Entities/FeesSet.html", "link": "SellerLabs/Research/Entities/FeesSet.html#method_getCategory", "name": "SellerLabs\\Research\\Entities\\FeesSet::getCategory", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\FeesSet", "fromLink": "SellerLabs/Research/Entities/FeesSet.html", "link": "SellerLabs/Research/Entities/FeesSet.html#method_getFbaOrder", "name": "SellerLabs\\Research\\Entities\\FeesSet::getFbaOrder", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\FeesSet", "fromLink": "SellerLabs/Research/Entities/FeesSet.html", "link": "SellerLabs/Research/Entities/FeesSet.html#method_getFbaPick", "name": "SellerLabs\\Research\\Entities\\FeesSet::getFbaPick", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\FeesSet", "fromLink": "SellerLabs/Research/Entities/FeesSet.html", "link": "SellerLabs/Research/Entities/FeesSet.html#method_getFbaWeight", "name": "SellerLabs\\Research\\Entities\\FeesSet::getFbaWeight", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\FeesSet", "fromLink": "SellerLabs/Research/Entities/FeesSet.html", "link": "SellerLabs/Research/Entities/FeesSet.html#method_getFeesTotal", "name": "SellerLabs\\Research\\Entities\\FeesSet::getFeesTotal", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\FeesSet", "fromLink": "SellerLabs/Research/Entities/FeesSet.html", "link": "SellerLabs/Research/Entities/FeesSet.html#method_getFormattedFeesTotal", "name": "SellerLabs\\Research\\Entities\\FeesSet::getFormattedFeesTotal", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\FeesSet", "fromLink": "SellerLabs/Research/Entities/FeesSet.html", "link": "SellerLabs/Research/Entities/FeesSet.html#method_getNetIncome", "name": "SellerLabs\\Research\\Entities\\FeesSet::getNetIncome", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\FeesSet", "fromLink": "SellerLabs/Research/Entities/FeesSet.html", "link": "SellerLabs/Research/Entities/FeesSet.html#method_getFormattedNetIncome", "name": "SellerLabs\\Research\\Entities\\FeesSet::getFormattedNetIncome", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\FeesSet", "fromLink": "SellerLabs/Research/Entities/FeesSet.html", "link": "SellerLabs/Research/Entities/FeesSet.html#method_getPrice", "name": "SellerLabs\\Research\\Entities\\FeesSet::getPrice", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\FeesSet", "fromLink": "SellerLabs/Research/Entities/FeesSet.html", "link": "SellerLabs/Research/Entities/FeesSet.html#method_getRevenue", "name": "SellerLabs\\Research\\Entities\\FeesSet::getRevenue", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\FeesSet", "fromLink": "SellerLabs/Research/Entities/FeesSet.html", "link": "SellerLabs/Research/Entities/FeesSet.html#method_getType", "name": "SellerLabs\\Research\\Entities\\FeesSet::getType", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\FeesSet", "fromLink": "SellerLabs/Research/Entities/FeesSet.html", "link": "SellerLabs/Research/Entities/FeesSet.html#method_getProfitMargin", "name": "SellerLabs\\Research\\Entities\\FeesSet::getProfitMargin", "doc": "&quot;Returns profit margin in a fraction&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\FeesSet", "fromLink": "SellerLabs/Research/Entities/FeesSet.html", "link": "SellerLabs/Research/Entities/FeesSet.html#method_getProfitMarginPercentage", "name": "SellerLabs\\Research\\Entities\\FeesSet::getProfitMarginPercentage", "doc": "&quot;Returns profit margin in a percentage&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\Research\\Entities", "fromLink": "SellerLabs/Research/Entities.html", "link": "SellerLabs/Research/Entities/Offer.html", "name": "SellerLabs\\Research\\Entities\\Offer", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\Offer", "fromLink": "SellerLabs/Research/Entities/Offer.html", "link": "SellerLabs/Research/Entities/Offer.html#method___construct", "name": "SellerLabs\\Research\\Entities\\Offer::__construct", "doc": "&quot;Builds an offer object from a parse json object&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\Offer", "fromLink": "SellerLabs/Research/Entities/Offer.html", "link": "SellerLabs/Research/Entities/Offer.html#method_getCondition", "name": "SellerLabs\\Research\\Entities\\Offer::getCondition", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\Offer", "fromLink": "SellerLabs/Research/Entities/Offer.html", "link": "SellerLabs/Research/Entities/Offer.html#method_getFeedbackCount", "name": "SellerLabs\\Research\\Entities\\Offer::getFeedbackCount", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\Offer", "fromLink": "SellerLabs/Research/Entities/Offer.html", "link": "SellerLabs/Research/Entities/Offer.html#method_getFulfillmentCenter", "name": "SellerLabs\\Research\\Entities\\Offer::getFulfillmentCenter", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\Offer", "fromLink": "SellerLabs/Research/Entities/Offer.html", "link": "SellerLabs/Research/Entities/Offer.html#method_getMulti", "name": "SellerLabs\\Research\\Entities\\Offer::getMulti", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\Offer", "fromLink": "SellerLabs/Research/Entities/Offer.html", "link": "SellerLabs/Research/Entities/Offer.html#method_getNumber", "name": "SellerLabs\\Research\\Entities\\Offer::getNumber", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\Offer", "fromLink": "SellerLabs/Research/Entities/Offer.html", "link": "SellerLabs/Research/Entities/Offer.html#method_getPrice", "name": "SellerLabs\\Research\\Entities\\Offer::getPrice", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\Offer", "fromLink": "SellerLabs/Research/Entities/Offer.html", "link": "SellerLabs/Research/Entities/Offer.html#method_getPriceLanded", "name": "SellerLabs\\Research\\Entities\\Offer::getPriceLanded", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\Offer", "fromLink": "SellerLabs/Research/Entities/Offer.html", "link": "SellerLabs/Research/Entities/Offer.html#method_getPriceShipping", "name": "SellerLabs\\Research\\Entities\\Offer::getPriceShipping", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\Offer", "fromLink": "SellerLabs/Research/Entities/Offer.html", "link": "SellerLabs/Research/Entities/Offer.html#method_getRating", "name": "SellerLabs\\Research\\Entities\\Offer::getRating", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\Offer", "fromLink": "SellerLabs/Research/Entities/Offer.html", "link": "SellerLabs/Research/Entities/Offer.html#method_getShipdom", "name": "SellerLabs\\Research\\Entities\\Offer::getShipdom", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\Offer", "fromLink": "SellerLabs/Research/Entities/Offer.html", "link": "SellerLabs/Research/Entities/Offer.html#method_getShipmax", "name": "SellerLabs\\Research\\Entities\\Offer::getShipmax", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\Offer", "fromLink": "SellerLabs/Research/Entities/Offer.html", "link": "SellerLabs/Research/Entities/Offer.html#method_getSubcondition", "name": "SellerLabs\\Research\\Entities\\Offer::getSubcondition", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\Research\\Entities", "fromLink": "SellerLabs/Research/Entities.html", "link": "SellerLabs/Research/Entities/SearchProduct.html", "name": "SellerLabs\\Research\\Entities\\SearchProduct", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\SearchProduct", "fromLink": "SellerLabs/Research/Entities/SearchProduct.html", "link": "SellerLabs/Research/Entities/SearchProduct.html#method___construct", "name": "SellerLabs\\Research\\Entities\\SearchProduct::__construct", "doc": "&quot;Construct a search product from a parsed JSON object&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\SearchProduct", "fromLink": "SellerLabs/Research/Entities/SearchProduct.html", "link": "SellerLabs/Research/Entities/SearchProduct.html#method_getAsin", "name": "SellerLabs\\Research\\Entities\\SearchProduct::getAsin", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\SearchProduct", "fromLink": "SellerLabs/Research/Entities/SearchProduct.html", "link": "SellerLabs/Research/Entities/SearchProduct.html#method_getCatalog", "name": "SellerLabs\\Research\\Entities\\SearchProduct::getCatalog", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\SearchProduct", "fromLink": "SellerLabs/Research/Entities/SearchProduct.html", "link": "SellerLabs/Research/Entities/SearchProduct.html#method_getEan", "name": "SellerLabs\\Research\\Entities\\SearchProduct::getEan", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\SearchProduct", "fromLink": "SellerLabs/Research/Entities/SearchProduct.html", "link": "SellerLabs/Research/Entities/SearchProduct.html#method_getImageUrl", "name": "SellerLabs\\Research\\Entities\\SearchProduct::getImageUrl", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\SearchProduct", "fromLink": "SellerLabs/Research/Entities/SearchProduct.html", "link": "SellerLabs/Research/Entities/SearchProduct.html#method_getRank", "name": "SellerLabs\\Research\\Entities\\SearchProduct::getRank", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\SearchProduct", "fromLink": "SellerLabs/Research/Entities/SearchProduct.html", "link": "SellerLabs/Research/Entities/SearchProduct.html#method_getCategory", "name": "SellerLabs\\Research\\Entities\\SearchProduct::getCategory", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\SearchProduct", "fromLink": "SellerLabs/Research/Entities/SearchProduct.html", "link": "SellerLabs/Research/Entities/SearchProduct.html#method_getCategoryId", "name": "SellerLabs\\Research\\Entities\\SearchProduct::getCategoryId", "doc": "&quot;Get the Id of the main category of this product&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\SearchProduct", "fromLink": "SellerLabs/Research/Entities/SearchProduct.html", "link": "SellerLabs/Research/Entities/SearchProduct.html#method_getName", "name": "SellerLabs\\Research\\Entities\\SearchProduct::getName", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\SearchProduct", "fromLink": "SellerLabs/Research/Entities/SearchProduct.html", "link": "SellerLabs/Research/Entities/SearchProduct.html#method_getType", "name": "SellerLabs\\Research\\Entities\\SearchProduct::getType", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Entities\\SearchProduct", "fromLink": "SellerLabs/Research/Entities/SearchProduct.html", "link": "SellerLabs/Research/Entities/SearchProduct.html#method_getWeight", "name": "SellerLabs\\Research\\Entities\\SearchProduct::getWeight", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\Research\\Exceptions", "fromLink": "SellerLabs/Research/Exceptions.html", "link": "SellerLabs/Research/Exceptions/EmptyResultsException.html", "name": "SellerLabs\\Research\\Exceptions\\EmptyResultsException", "doc": "&quot;\n&quot;"},
                    
            {"type": "Class", "fromName": "SellerLabs\\Research\\Exceptions", "fromLink": "SellerLabs/Research/Exceptions.html", "link": "SellerLabs/Research/Exceptions/InvalidFormatException.html", "name": "SellerLabs\\Research\\Exceptions\\InvalidFormatException", "doc": "&quot;\n&quot;"},
                    
            {"type": "Class", "fromName": "SellerLabs\\Research", "fromLink": "SellerLabs/Research.html", "link": "SellerLabs/Research/FormatUtils.html", "name": "SellerLabs\\Research\\FormatUtils", "doc": "&quot;Class FormatUtils&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\Research\\FormatUtils", "fromLink": "SellerLabs/Research/FormatUtils.html", "link": "SellerLabs/Research/FormatUtils.html#method_formatPrice", "name": "SellerLabs\\Research\\FormatUtils::formatPrice", "doc": "&quot;Format a price to two decimals&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\FormatUtils", "fromLink": "SellerLabs/Research/FormatUtils.html", "link": "SellerLabs/Research/FormatUtils.html#method_formatPercentage", "name": "SellerLabs\\Research\\FormatUtils::formatPercentage", "doc": "&quot;Format a number into a percentage with two decimals&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\Research\\Interfaces", "fromLink": "SellerLabs/Research/Interfaces.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "doc": "&quot;Interface ResearchClientInterface&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_generateCode", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::generateCode", "doc": "&quot;Generate an authorization code for NodeMWS&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_getOffers", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::getOffers", "doc": "&quot;Get the current offers for an ASIN from NodeMWS&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_getFees", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::getFees", "doc": "&quot;Call the fees endpoint of NodeMWS and return the response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_getSearch", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::getSearch", "doc": "&quot;Search the catalog and return the response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_getAsinCategories", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::getAsinCategories", "doc": "&quot;Get categories for an ASIN&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_getCategoryById", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::getCategoryById", "doc": "&quot;Get a category by ID&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\Research", "fromLink": "SellerLabs/Research.html", "link": "SellerLabs/Research/ResearchClient.html", "name": "SellerLabs\\Research\\ResearchClient", "doc": "&quot;Class ResearchClient&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\Research\\ResearchClient", "fromLink": "SellerLabs/Research/ResearchClient.html", "link": "SellerLabs/Research/ResearchClient.html#method___construct", "name": "SellerLabs\\Research\\ResearchClient::__construct", "doc": "&quot;Construct an instance of a ResearchClient&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\ResearchClient", "fromLink": "SellerLabs/Research/ResearchClient.html", "link": "SellerLabs/Research/ResearchClient.html#method_generateCode", "name": "SellerLabs\\Research\\ResearchClient::generateCode", "doc": "&quot;Generate an authorization code for the Research API server.&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\ResearchClient", "fromLink": "SellerLabs/Research/ResearchClient.html", "link": "SellerLabs/Research/ResearchClient.html#method_getOffers", "name": "SellerLabs\\Research\\ResearchClient::getOffers", "doc": "&quot;Get the current offers for an ASIN from the Research API.&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\ResearchClient", "fromLink": "SellerLabs/Research/ResearchClient.html", "link": "SellerLabs/Research/ResearchClient.html#method_getFees", "name": "SellerLabs\\Research\\ResearchClient::getFees", "doc": "&quot;Call the fees endpoint of the Research API and return the response.&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\ResearchClient", "fromLink": "SellerLabs/Research/ResearchClient.html", "link": "SellerLabs/Research/ResearchClient.html#method_getSearch", "name": "SellerLabs\\Research\\ResearchClient::getSearch", "doc": "&quot;Search the catalog and return the response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\ResearchClient", "fromLink": "SellerLabs/Research/ResearchClient.html", "link": "SellerLabs/Research/ResearchClient.html#method_getAsinCategories", "name": "SellerLabs\\Research\\ResearchClient::getAsinCategories", "doc": "&quot;Get categories for an ASIN&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\ResearchClient", "fromLink": "SellerLabs/Research/ResearchClient.html", "link": "SellerLabs/Research/ResearchClient.html#method_getCategoryById", "name": "SellerLabs\\Research\\ResearchClient::getCategoryById", "doc": "&quot;Get a category by ID&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\Research\\Responses", "fromLink": "SellerLabs/Research/Responses.html", "link": "SellerLabs/Research/Responses/FeesResponse.html", "name": "SellerLabs\\Research\\Responses\\FeesResponse", "doc": "&quot;Class FeesResponse&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\FeesResponse", "fromLink": "SellerLabs/Research/Responses/FeesResponse.html", "link": "SellerLabs/Research/Responses/FeesResponse.html#method___construct", "name": "SellerLabs\\Research\\Responses\\FeesResponse::__construct", "doc": "&quot;Construct an instance of a FeesResponse&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\FeesResponse", "fromLink": "SellerLabs/Research/Responses/FeesResponse.html", "link": "SellerLabs/Research/Responses/FeesResponse.html#method_getFbaFees", "name": "SellerLabs\\Research\\Responses\\FeesResponse::getFbaFees", "doc": "&quot;Get FBA fees&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\FeesResponse", "fromLink": "SellerLabs/Research/Responses/FeesResponse.html", "link": "SellerLabs/Research/Responses/FeesResponse.html#method_getMerchantFees", "name": "SellerLabs\\Research\\Responses\\FeesResponse::getMerchantFees", "doc": "&quot;Get merchant-fulfilled fees&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\FeesResponse", "fromLink": "SellerLabs/Research/Responses/FeesResponse.html", "link": "SellerLabs/Research/Responses/FeesResponse.html#method_getSizeTier", "name": "SellerLabs\\Research\\Responses\\FeesResponse::getSizeTier", "doc": "&quot;Get product size tier&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\Research\\Responses", "fromLink": "SellerLabs/Research/Responses.html", "link": "SellerLabs/Research/Responses/GetAsinCategoriesResponse.html", "name": "SellerLabs\\Research\\Responses\\GetAsinCategoriesResponse", "doc": "&quot;Class GetAsinCategoriesResponse&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\GetAsinCategoriesResponse", "fromLink": "SellerLabs/Research/Responses/GetAsinCategoriesResponse.html", "link": "SellerLabs/Research/Responses/GetAsinCategoriesResponse.html#method___construct", "name": "SellerLabs\\Research\\Responses\\GetAsinCategoriesResponse::__construct", "doc": "&quot;Create a GetAsinCategoriesResponse from a raw getAsinCategories response\nfrom ModernMws&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\GetAsinCategoriesResponse", "fromLink": "SellerLabs/Research/Responses/GetAsinCategoriesResponse.html", "link": "SellerLabs/Research/Responses/GetAsinCategoriesResponse.html#method_getCategoryMappings", "name": "SellerLabs\\Research\\Responses\\GetAsinCategoriesResponse::getCategoryMappings", "doc": "&quot;Get all category mappings contained in response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\GetAsinCategoriesResponse", "fromLink": "SellerLabs/Research/Responses/GetAsinCategoriesResponse.html", "link": "SellerLabs/Research/Responses/GetAsinCategoriesResponse.html#method_getMainCategory", "name": "SellerLabs\\Research\\Responses\\GetAsinCategoriesResponse::getMainCategory", "doc": "&quot;Get the main category from the response&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\Research\\Responses", "fromLink": "SellerLabs/Research/Responses.html", "link": "SellerLabs/Research/Responses/GetCategoryByIdResponse.html", "name": "SellerLabs\\Research\\Responses\\GetCategoryByIdResponse", "doc": "&quot;Class GetCategoryByIdResponse&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\GetCategoryByIdResponse", "fromLink": "SellerLabs/Research/Responses/GetCategoryByIdResponse.html", "link": "SellerLabs/Research/Responses/GetCategoryByIdResponse.html#method___construct", "name": "SellerLabs\\Research\\Responses\\GetCategoryByIdResponse::__construct", "doc": "&quot;Construct an instance of a GetCategoryByIdResponse&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\GetCategoryByIdResponse", "fromLink": "SellerLabs/Research/Responses/GetCategoryByIdResponse.html", "link": "SellerLabs/Research/Responses/GetCategoryByIdResponse.html#method_getCategoryId", "name": "SellerLabs\\Research\\Responses\\GetCategoryByIdResponse::getCategoryId", "doc": "&quot;Get the category id associated with this response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\GetCategoryByIdResponse", "fromLink": "SellerLabs/Research/Responses/GetCategoryByIdResponse.html", "link": "SellerLabs/Research/Responses/GetCategoryByIdResponse.html#method_getCategoryMapping", "name": "SellerLabs\\Research\\Responses\\GetCategoryByIdResponse::getCategoryMapping", "doc": "&quot;Get the category mapping returned&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\GetCategoryByIdResponse", "fromLink": "SellerLabs/Research/Responses/GetCategoryByIdResponse.html", "link": "SellerLabs/Research/Responses/GetCategoryByIdResponse.html#method_getCategory", "name": "SellerLabs\\Research\\Responses\\GetCategoryByIdResponse::getCategory", "doc": "&quot;Get the category associated with this response&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\Research\\Responses", "fromLink": "SellerLabs/Research/Responses.html", "link": "SellerLabs/Research/Responses/OffersResponse.html", "name": "SellerLabs\\Research\\Responses\\OffersResponse", "doc": "&quot;Class OffersResponse&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\OffersResponse", "fromLink": "SellerLabs/Research/Responses/OffersResponse.html", "link": "SellerLabs/Research/Responses/OffersResponse.html#method___construct", "name": "SellerLabs\\Research\\Responses\\OffersResponse::__construct", "doc": "&quot;Construct an offer response from a Guzzle client response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\OffersResponse", "fromLink": "SellerLabs/Research/Responses/OffersResponse.html", "link": "SellerLabs/Research/Responses/OffersResponse.html#method_getFbaNewOffers", "name": "SellerLabs\\Research\\Responses\\OffersResponse::getFbaNewOffers", "doc": "&quot;Get new FBA offers&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\OffersResponse", "fromLink": "SellerLabs/Research/Responses/OffersResponse.html", "link": "SellerLabs/Research/Responses/OffersResponse.html#method_getFbaUsedOffers", "name": "SellerLabs\\Research\\Responses\\OffersResponse::getFbaUsedOffers", "doc": "&quot;Get used FBA offers&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\OffersResponse", "fromLink": "SellerLabs/Research/Responses/OffersResponse.html", "link": "SellerLabs/Research/Responses/OffersResponse.html#method_getMerchantNewOffers", "name": "SellerLabs\\Research\\Responses\\OffersResponse::getMerchantNewOffers", "doc": "&quot;Get new merchant offers&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\OffersResponse", "fromLink": "SellerLabs/Research/Responses/OffersResponse.html", "link": "SellerLabs/Research/Responses/OffersResponse.html#method_getMerchantUsedOffers", "name": "SellerLabs\\Research\\Responses\\OffersResponse::getMerchantUsedOffers", "doc": "&quot;Get used merchant offers&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\OffersResponse", "fromLink": "SellerLabs/Research/Responses/OffersResponse.html", "link": "SellerLabs/Research/Responses/OffersResponse.html#method_getProductIdCode", "name": "SellerLabs\\Research\\Responses\\OffersResponse::getProductIdCode", "doc": "&quot;Get the product id&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\OffersResponse", "fromLink": "SellerLabs/Research/Responses/OffersResponse.html", "link": "SellerLabs/Research/Responses/OffersResponse.html#method_getProductIdType", "name": "SellerLabs\\Research\\Responses\\OffersResponse::getProductIdType", "doc": "&quot;Get the product id type&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\OffersResponse", "fromLink": "SellerLabs/Research/Responses/OffersResponse.html", "link": "SellerLabs/Research/Responses/OffersResponse.html#method_getExtras", "name": "SellerLabs\\Research\\Responses\\OffersResponse::getExtras", "doc": "&quot;Get an array of all extras&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\OffersResponse", "fromLink": "SellerLabs/Research/Responses/OffersResponse.html", "link": "SellerLabs/Research/Responses/OffersResponse.html#method_hasExtra", "name": "SellerLabs\\Research\\Responses\\OffersResponse::hasExtra", "doc": "&quot;Check whether there is an extra defined with the specified key&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\OffersResponse", "fromLink": "SellerLabs/Research/Responses/OffersResponse.html", "link": "SellerLabs/Research/Responses/OffersResponse.html#method_getExtra", "name": "SellerLabs\\Research\\Responses\\OffersResponse::getExtra", "doc": "&quot;Get a single extra&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\OffersResponse", "fromLink": "SellerLabs/Research/Responses/OffersResponse.html", "link": "SellerLabs/Research/Responses/OffersResponse.html#method_hasEanIdType", "name": "SellerLabs\\Research\\Responses\\OffersResponse::hasEanIdType", "doc": "&quot;Check if the EAN is provided in the extra properties&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\OffersResponse", "fromLink": "SellerLabs/Research/Responses/OffersResponse.html", "link": "SellerLabs/Research/Responses/OffersResponse.html#method_hasUpcIdType", "name": "SellerLabs\\Research\\Responses\\OffersResponse::hasUpcIdType", "doc": "&quot;Check if the UPC is provided in the extra properties&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\Research\\Responses", "fromLink": "SellerLabs/Research/Responses.html", "link": "SellerLabs/Research/Responses/SearchResponse.html", "name": "SellerLabs\\Research\\Responses\\SearchResponse", "doc": "&quot;Class SearchResponse&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\SearchResponse", "fromLink": "SellerLabs/Research/Responses/SearchResponse.html", "link": "SellerLabs/Research/Responses/SearchResponse.html#method___construct", "name": "SellerLabs\\Research\\Responses\\SearchResponse::__construct", "doc": "&quot;Construct a search response from a Guzzle client response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\SearchResponse", "fromLink": "SellerLabs/Research/Responses/SearchResponse.html", "link": "SellerLabs/Research/Responses/SearchResponse.html#method_getSearchProducts", "name": "SellerLabs\\Research\\Responses\\SearchResponse::getSearchProducts", "doc": "&quot;Get the search products from a NodeMws response.&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\SearchResponse", "fromLink": "SellerLabs/Research/Responses/SearchResponse.html", "link": "SellerLabs/Research/Responses/SearchResponse.html#method_isEmpty", "name": "SellerLabs\\Research\\Responses\\SearchResponse::isEmpty", "doc": "&quot;Check if a SearchResponse gives back no products.&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Responses\\SearchResponse", "fromLink": "SellerLabs/Research/Responses/SearchResponse.html", "link": "SellerLabs/Research/Responses/SearchResponse.html#method_first", "name": "SellerLabs\\Research\\Responses\\SearchResponse::first", "doc": "&quot;Return the first product returned from a search query.&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});



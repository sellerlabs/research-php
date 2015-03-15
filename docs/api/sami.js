(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '    <ul>                <li data-name="namespace:" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">SellerLabs</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="namespace:" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">NodeMws</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="namespace:SellerLabs_NodeMws_Entities" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="SellerLabs/NodeMws/Entities.html">Entities</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:SellerLabs_NodeMws_Entities_CategoryMapping" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/NodeMws/Entities/CategoryMapping.html">CategoryMapping</a>                    </div>                </li>                            <li data-name="class:SellerLabs_NodeMws_Entities_FeesSet" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/NodeMws/Entities/FeesSet.html">FeesSet</a>                    </div>                </li>                            <li data-name="class:SellerLabs_NodeMws_Entities_Offer" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/NodeMws/Entities/Offer.html">Offer</a>                    </div>                </li>                            <li data-name="class:SellerLabs_NodeMws_Entities_SearchProduct" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/NodeMws/Entities/SearchProduct.html">SearchProduct</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:SellerLabs_NodeMws_Exceptions" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="SellerLabs/NodeMws/Exceptions.html">Exceptions</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:SellerLabs_NodeMws_Exceptions_EmptyResultsException" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/NodeMws/Exceptions/EmptyResultsException.html">EmptyResultsException</a>                    </div>                </li>                            <li data-name="class:SellerLabs_NodeMws_Exceptions_InvalidFormatException" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/NodeMws/Exceptions/InvalidFormatException.html">InvalidFormatException</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:SellerLabs_NodeMws_Interfaces" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="SellerLabs/NodeMws/Interfaces.html">Interfaces</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:SellerLabs_NodeMws_Interfaces_NodeMwsClientInterface" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html">NodeMwsClientInterface</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:SellerLabs_NodeMws_Responses" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="SellerLabs/NodeMws/Responses.html">Responses</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:SellerLabs_NodeMws_Responses_FeesResponse" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/NodeMws/Responses/FeesResponse.html">FeesResponse</a>                    </div>                </li>                            <li data-name="class:SellerLabs_NodeMws_Responses_GetAsinCategoriesResponse" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/NodeMws/Responses/GetAsinCategoriesResponse.html">GetAsinCategoriesResponse</a>                    </div>                </li>                            <li data-name="class:SellerLabs_NodeMws_Responses_GetCategoryByIdResponse" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/NodeMws/Responses/GetCategoryByIdResponse.html">GetCategoryByIdResponse</a>                    </div>                </li>                            <li data-name="class:SellerLabs_NodeMws_Responses_OffersResponse" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/NodeMws/Responses/OffersResponse.html">OffersResponse</a>                    </div>                </li>                            <li data-name="class:SellerLabs_NodeMws_Responses_SearchResponse" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/NodeMws/Responses/SearchResponse.html">SearchResponse</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                            <li data-name="namespace:SellerLabs_Research" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="SellerLabs/Research.html">Research</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="namespace:SellerLabs_Research_Interfaces" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="SellerLabs/Research/Interfaces.html">Interfaces</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:SellerLabs_Research_Interfaces_ResearchClientInterface" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="SellerLabs/Research/Interfaces/ResearchClientInterface.html">ResearchClientInterface</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:SellerLabs_Research_FormatUtils" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="SellerLabs/Research/FormatUtils.html">FormatUtils</a>                    </div>                </li>                            <li data-name="class:SellerLabs_Research_ResearchClient" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="SellerLabs/Research/ResearchClient.html">ResearchClient</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    {"type": "Namespace", "link": "SellerLabs.html", "name": "SellerLabs", "doc": "Namespace SellerLabs"},{"type": "Namespace", "link": "SellerLabs/NodeMws.html", "name": "SellerLabs\\NodeMws", "doc": "Namespace SellerLabs\\NodeMws"},{"type": "Namespace", "link": "SellerLabs/NodeMws/Entities.html", "name": "SellerLabs\\NodeMws\\Entities", "doc": "Namespace SellerLabs\\NodeMws\\Entities"},{"type": "Namespace", "link": "SellerLabs/NodeMws/Exceptions.html", "name": "SellerLabs\\NodeMws\\Exceptions", "doc": "Namespace SellerLabs\\NodeMws\\Exceptions"},{"type": "Namespace", "link": "SellerLabs/NodeMws/Interfaces.html", "name": "SellerLabs\\NodeMws\\Interfaces", "doc": "Namespace SellerLabs\\NodeMws\\Interfaces"},{"type": "Namespace", "link": "SellerLabs/NodeMws/Responses.html", "name": "SellerLabs\\NodeMws\\Responses", "doc": "Namespace SellerLabs\\NodeMws\\Responses"},{"type": "Namespace", "link": "SellerLabs/Research.html", "name": "SellerLabs\\Research", "doc": "Namespace SellerLabs\\Research"},{"type": "Namespace", "link": "SellerLabs/Research/Interfaces.html", "name": "SellerLabs\\Research\\Interfaces", "doc": "Namespace SellerLabs\\Research\\Interfaces"},
            {"type": "Interface", "fromName": "SellerLabs\\NodeMws\\Interfaces", "fromLink": "SellerLabs/NodeMws/Interfaces.html", "link": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html", "name": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface", "doc": "&quot;Interface NodeMwsClientInterface&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface", "fromLink": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html", "link": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html#method_generateCode", "name": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface::generateCode", "doc": "&quot;Generate an authorization code for NodeMWS&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface", "fromLink": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html", "link": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html#method_getOffers", "name": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface::getOffers", "doc": "&quot;Get the current offers for an ASIN from NodeMWS&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface", "fromLink": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html", "link": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html#method_getFees", "name": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface::getFees", "doc": "&quot;Call the fees endpoint of NodeMWS and return the response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface", "fromLink": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html", "link": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html#method_getSearch", "name": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface::getSearch", "doc": "&quot;Search the catalog and return the response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface", "fromLink": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html", "link": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html#method_getAsinCategories", "name": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface::getAsinCategories", "doc": "&quot;Get categories for an ASIN&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface", "fromLink": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html", "link": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html#method_getCategoryById", "name": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface::getCategoryById", "doc": "&quot;Get a category by ID&quot;"},
            
            {"type": "Interface", "fromName": "SellerLabs\\Research\\Interfaces", "fromLink": "SellerLabs/Research/Interfaces.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "doc": "&quot;Interface ResearchClientInterface&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_generateCode", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::generateCode", "doc": "&quot;Generate an authorization code for NodeMWS&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_getOffers", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::getOffers", "doc": "&quot;Get the current offers for an ASIN from NodeMWS&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_getFees", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::getFees", "doc": "&quot;Call the fees endpoint of NodeMWS and return the response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_getSearch", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::getSearch", "doc": "&quot;Search the catalog and return the response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_getAsinCategories", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::getAsinCategories", "doc": "&quot;Get categories for an ASIN&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface", "fromLink": "SellerLabs/Research/Interfaces/ResearchClientInterface.html", "link": "SellerLabs/Research/Interfaces/ResearchClientInterface.html#method_getCategoryById", "name": "SellerLabs\\Research\\Interfaces\\ResearchClientInterface::getCategoryById", "doc": "&quot;Get a category by ID&quot;"},
            
            
            {"type": "Class", "fromName": "SellerLabs\\NodeMws\\Entities", "fromLink": "SellerLabs/NodeMws/Entities.html", "link": "SellerLabs/NodeMws/Entities/CategoryMapping.html", "name": "SellerLabs\\NodeMws\\Entities\\CategoryMapping", "doc": "&quot;Class CategoryMapping&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\CategoryMapping", "fromLink": "SellerLabs/NodeMws/Entities/CategoryMapping.html", "link": "SellerLabs/NodeMws/Entities/CategoryMapping.html#method___construct", "name": "SellerLabs\\NodeMws\\Entities\\CategoryMapping::__construct", "doc": "&quot;Construct an instance of a CategoryMapping&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\CategoryMapping", "fromLink": "SellerLabs/NodeMws/Entities/CategoryMapping.html", "link": "SellerLabs/NodeMws/Entities/CategoryMapping.html#method_isMainCategory", "name": "SellerLabs\\NodeMws\\Entities\\CategoryMapping::isMainCategory", "doc": "&quot;Return whether or not the category is a main category&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\CategoryMapping", "fromLink": "SellerLabs/NodeMws/Entities/CategoryMapping.html", "link": "SellerLabs/NodeMws/Entities/CategoryMapping.html#method_getCategoryId", "name": "SellerLabs\\NodeMws\\Entities\\CategoryMapping::getCategoryId", "doc": "&quot;Get the ID of a category&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\CategoryMapping", "fromLink": "SellerLabs/NodeMws/Entities/CategoryMapping.html", "link": "SellerLabs/NodeMws/Entities/CategoryMapping.html#method_getCategory", "name": "SellerLabs\\NodeMws\\Entities\\CategoryMapping::getCategory", "doc": "&quot;Get the category name&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\NodeMws\\Entities", "fromLink": "SellerLabs/NodeMws/Entities.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet", "doc": "&quot;Class FeesSet&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\FeesSet", "fromLink": "SellerLabs/NodeMws/Entities/FeesSet.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html#method___construct", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet::__construct", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\FeesSet", "fromLink": "SellerLabs/NodeMws/Entities/FeesSet.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html#method_getAmazonCommission", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet::getAmazonCommission", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\FeesSet", "fromLink": "SellerLabs/NodeMws/Entities/FeesSet.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html#method_getAmazonVar", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet::getAmazonVar", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\FeesSet", "fromLink": "SellerLabs/NodeMws/Entities/FeesSet.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html#method_getCategory", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet::getCategory", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\FeesSet", "fromLink": "SellerLabs/NodeMws/Entities/FeesSet.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html#method_getFbaOrder", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet::getFbaOrder", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\FeesSet", "fromLink": "SellerLabs/NodeMws/Entities/FeesSet.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html#method_getFbaPick", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet::getFbaPick", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\FeesSet", "fromLink": "SellerLabs/NodeMws/Entities/FeesSet.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html#method_getFbaWeight", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet::getFbaWeight", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\FeesSet", "fromLink": "SellerLabs/NodeMws/Entities/FeesSet.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html#method_getFeesTotal", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet::getFeesTotal", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\FeesSet", "fromLink": "SellerLabs/NodeMws/Entities/FeesSet.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html#method_getFormattedFeesTotal", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet::getFormattedFeesTotal", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\FeesSet", "fromLink": "SellerLabs/NodeMws/Entities/FeesSet.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html#method_getNetIncome", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet::getNetIncome", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\FeesSet", "fromLink": "SellerLabs/NodeMws/Entities/FeesSet.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html#method_getFormattedNetIncome", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet::getFormattedNetIncome", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\FeesSet", "fromLink": "SellerLabs/NodeMws/Entities/FeesSet.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html#method_getPrice", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet::getPrice", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\FeesSet", "fromLink": "SellerLabs/NodeMws/Entities/FeesSet.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html#method_getRevenue", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet::getRevenue", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\FeesSet", "fromLink": "SellerLabs/NodeMws/Entities/FeesSet.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html#method_getType", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet::getType", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\FeesSet", "fromLink": "SellerLabs/NodeMws/Entities/FeesSet.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html#method_getProfitMargin", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet::getProfitMargin", "doc": "&quot;Returns profit margin in a fraction&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\FeesSet", "fromLink": "SellerLabs/NodeMws/Entities/FeesSet.html", "link": "SellerLabs/NodeMws/Entities/FeesSet.html#method_getProfitMarginPercentage", "name": "SellerLabs\\NodeMws\\Entities\\FeesSet::getProfitMarginPercentage", "doc": "&quot;Returns profit margin in a percentage&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\NodeMws\\Entities", "fromLink": "SellerLabs/NodeMws/Entities.html", "link": "SellerLabs/NodeMws/Entities/Offer.html", "name": "SellerLabs\\NodeMws\\Entities\\Offer", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\Offer", "fromLink": "SellerLabs/NodeMws/Entities/Offer.html", "link": "SellerLabs/NodeMws/Entities/Offer.html#method___construct", "name": "SellerLabs\\NodeMws\\Entities\\Offer::__construct", "doc": "&quot;Builds an offer object from a parse json object&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\Offer", "fromLink": "SellerLabs/NodeMws/Entities/Offer.html", "link": "SellerLabs/NodeMws/Entities/Offer.html#method_getCondition", "name": "SellerLabs\\NodeMws\\Entities\\Offer::getCondition", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\Offer", "fromLink": "SellerLabs/NodeMws/Entities/Offer.html", "link": "SellerLabs/NodeMws/Entities/Offer.html#method_getFeedbackCount", "name": "SellerLabs\\NodeMws\\Entities\\Offer::getFeedbackCount", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\Offer", "fromLink": "SellerLabs/NodeMws/Entities/Offer.html", "link": "SellerLabs/NodeMws/Entities/Offer.html#method_getFulfillmentCenter", "name": "SellerLabs\\NodeMws\\Entities\\Offer::getFulfillmentCenter", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\Offer", "fromLink": "SellerLabs/NodeMws/Entities/Offer.html", "link": "SellerLabs/NodeMws/Entities/Offer.html#method_getMulti", "name": "SellerLabs\\NodeMws\\Entities\\Offer::getMulti", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\Offer", "fromLink": "SellerLabs/NodeMws/Entities/Offer.html", "link": "SellerLabs/NodeMws/Entities/Offer.html#method_getNumber", "name": "SellerLabs\\NodeMws\\Entities\\Offer::getNumber", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\Offer", "fromLink": "SellerLabs/NodeMws/Entities/Offer.html", "link": "SellerLabs/NodeMws/Entities/Offer.html#method_getPrice", "name": "SellerLabs\\NodeMws\\Entities\\Offer::getPrice", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\Offer", "fromLink": "SellerLabs/NodeMws/Entities/Offer.html", "link": "SellerLabs/NodeMws/Entities/Offer.html#method_getPriceLanded", "name": "SellerLabs\\NodeMws\\Entities\\Offer::getPriceLanded", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\Offer", "fromLink": "SellerLabs/NodeMws/Entities/Offer.html", "link": "SellerLabs/NodeMws/Entities/Offer.html#method_getPriceShipping", "name": "SellerLabs\\NodeMws\\Entities\\Offer::getPriceShipping", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\Offer", "fromLink": "SellerLabs/NodeMws/Entities/Offer.html", "link": "SellerLabs/NodeMws/Entities/Offer.html#method_getRating", "name": "SellerLabs\\NodeMws\\Entities\\Offer::getRating", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\Offer", "fromLink": "SellerLabs/NodeMws/Entities/Offer.html", "link": "SellerLabs/NodeMws/Entities/Offer.html#method_getShipdom", "name": "SellerLabs\\NodeMws\\Entities\\Offer::getShipdom", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\Offer", "fromLink": "SellerLabs/NodeMws/Entities/Offer.html", "link": "SellerLabs/NodeMws/Entities/Offer.html#method_getShipmax", "name": "SellerLabs\\NodeMws\\Entities\\Offer::getShipmax", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\Offer", "fromLink": "SellerLabs/NodeMws/Entities/Offer.html", "link": "SellerLabs/NodeMws/Entities/Offer.html#method_getSubcondition", "name": "SellerLabs\\NodeMws\\Entities\\Offer::getSubcondition", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\NodeMws\\Entities", "fromLink": "SellerLabs/NodeMws/Entities.html", "link": "SellerLabs/NodeMws/Entities/SearchProduct.html", "name": "SellerLabs\\NodeMws\\Entities\\SearchProduct", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\SearchProduct", "fromLink": "SellerLabs/NodeMws/Entities/SearchProduct.html", "link": "SellerLabs/NodeMws/Entities/SearchProduct.html#method___construct", "name": "SellerLabs\\NodeMws\\Entities\\SearchProduct::__construct", "doc": "&quot;Construct a search product from a parsed JSON object&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\SearchProduct", "fromLink": "SellerLabs/NodeMws/Entities/SearchProduct.html", "link": "SellerLabs/NodeMws/Entities/SearchProduct.html#method_getAsin", "name": "SellerLabs\\NodeMws\\Entities\\SearchProduct::getAsin", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\SearchProduct", "fromLink": "SellerLabs/NodeMws/Entities/SearchProduct.html", "link": "SellerLabs/NodeMws/Entities/SearchProduct.html#method_getCatalog", "name": "SellerLabs\\NodeMws\\Entities\\SearchProduct::getCatalog", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\SearchProduct", "fromLink": "SellerLabs/NodeMws/Entities/SearchProduct.html", "link": "SellerLabs/NodeMws/Entities/SearchProduct.html#method_getEan", "name": "SellerLabs\\NodeMws\\Entities\\SearchProduct::getEan", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\SearchProduct", "fromLink": "SellerLabs/NodeMws/Entities/SearchProduct.html", "link": "SellerLabs/NodeMws/Entities/SearchProduct.html#method_getImageUrl", "name": "SellerLabs\\NodeMws\\Entities\\SearchProduct::getImageUrl", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\SearchProduct", "fromLink": "SellerLabs/NodeMws/Entities/SearchProduct.html", "link": "SellerLabs/NodeMws/Entities/SearchProduct.html#method_getRank", "name": "SellerLabs\\NodeMws\\Entities\\SearchProduct::getRank", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\SearchProduct", "fromLink": "SellerLabs/NodeMws/Entities/SearchProduct.html", "link": "SellerLabs/NodeMws/Entities/SearchProduct.html#method_getCategory", "name": "SellerLabs\\NodeMws\\Entities\\SearchProduct::getCategory", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\SearchProduct", "fromLink": "SellerLabs/NodeMws/Entities/SearchProduct.html", "link": "SellerLabs/NodeMws/Entities/SearchProduct.html#method_getCategoryId", "name": "SellerLabs\\NodeMws\\Entities\\SearchProduct::getCategoryId", "doc": "&quot;Get the Id of the main category of this product&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\SearchProduct", "fromLink": "SellerLabs/NodeMws/Entities/SearchProduct.html", "link": "SellerLabs/NodeMws/Entities/SearchProduct.html#method_getName", "name": "SellerLabs\\NodeMws\\Entities\\SearchProduct::getName", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\SearchProduct", "fromLink": "SellerLabs/NodeMws/Entities/SearchProduct.html", "link": "SellerLabs/NodeMws/Entities/SearchProduct.html#method_getType", "name": "SellerLabs\\NodeMws\\Entities\\SearchProduct::getType", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Entities\\SearchProduct", "fromLink": "SellerLabs/NodeMws/Entities/SearchProduct.html", "link": "SellerLabs/NodeMws/Entities/SearchProduct.html#method_getWeight", "name": "SellerLabs\\NodeMws\\Entities\\SearchProduct::getWeight", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\NodeMws\\Exceptions", "fromLink": "SellerLabs/NodeMws/Exceptions.html", "link": "SellerLabs/NodeMws/Exceptions/EmptyResultsException.html", "name": "SellerLabs\\NodeMws\\Exceptions\\EmptyResultsException", "doc": "&quot;\n&quot;"},
                    
            {"type": "Class", "fromName": "SellerLabs\\NodeMws\\Exceptions", "fromLink": "SellerLabs/NodeMws/Exceptions.html", "link": "SellerLabs/NodeMws/Exceptions/InvalidFormatException.html", "name": "SellerLabs\\NodeMws\\Exceptions\\InvalidFormatException", "doc": "&quot;\n&quot;"},
                    
            {"type": "Class", "fromName": "SellerLabs\\NodeMws\\Interfaces", "fromLink": "SellerLabs/NodeMws/Interfaces.html", "link": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html", "name": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface", "doc": "&quot;Interface NodeMwsClientInterface&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface", "fromLink": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html", "link": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html#method_generateCode", "name": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface::generateCode", "doc": "&quot;Generate an authorization code for NodeMWS&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface", "fromLink": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html", "link": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html#method_getOffers", "name": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface::getOffers", "doc": "&quot;Get the current offers for an ASIN from NodeMWS&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface", "fromLink": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html", "link": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html#method_getFees", "name": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface::getFees", "doc": "&quot;Call the fees endpoint of NodeMWS and return the response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface", "fromLink": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html", "link": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html#method_getSearch", "name": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface::getSearch", "doc": "&quot;Search the catalog and return the response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface", "fromLink": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html", "link": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html#method_getAsinCategories", "name": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface::getAsinCategories", "doc": "&quot;Get categories for an ASIN&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface", "fromLink": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html", "link": "SellerLabs/NodeMws/Interfaces/NodeMwsClientInterface.html#method_getCategoryById", "name": "SellerLabs\\NodeMws\\Interfaces\\NodeMwsClientInterface::getCategoryById", "doc": "&quot;Get a category by ID&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\NodeMws\\Responses", "fromLink": "SellerLabs/NodeMws/Responses.html", "link": "SellerLabs/NodeMws/Responses/FeesResponse.html", "name": "SellerLabs\\NodeMws\\Responses\\FeesResponse", "doc": "&quot;Class FeesResponse&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\FeesResponse", "fromLink": "SellerLabs/NodeMws/Responses/FeesResponse.html", "link": "SellerLabs/NodeMws/Responses/FeesResponse.html#method___construct", "name": "SellerLabs\\NodeMws\\Responses\\FeesResponse::__construct", "doc": "&quot;Construct an instance of a FeesResponse&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\FeesResponse", "fromLink": "SellerLabs/NodeMws/Responses/FeesResponse.html", "link": "SellerLabs/NodeMws/Responses/FeesResponse.html#method_getFbaFees", "name": "SellerLabs\\NodeMws\\Responses\\FeesResponse::getFbaFees", "doc": "&quot;Get FBA fees&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\FeesResponse", "fromLink": "SellerLabs/NodeMws/Responses/FeesResponse.html", "link": "SellerLabs/NodeMws/Responses/FeesResponse.html#method_getMerchantFees", "name": "SellerLabs\\NodeMws\\Responses\\FeesResponse::getMerchantFees", "doc": "&quot;Get merchant-fulfilled fees&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\FeesResponse", "fromLink": "SellerLabs/NodeMws/Responses/FeesResponse.html", "link": "SellerLabs/NodeMws/Responses/FeesResponse.html#method_getSizeTier", "name": "SellerLabs\\NodeMws\\Responses\\FeesResponse::getSizeTier", "doc": "&quot;Get product size tier&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\NodeMws\\Responses", "fromLink": "SellerLabs/NodeMws/Responses.html", "link": "SellerLabs/NodeMws/Responses/GetAsinCategoriesResponse.html", "name": "SellerLabs\\NodeMws\\Responses\\GetAsinCategoriesResponse", "doc": "&quot;Class GetAsinCategoriesResponse&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\GetAsinCategoriesResponse", "fromLink": "SellerLabs/NodeMws/Responses/GetAsinCategoriesResponse.html", "link": "SellerLabs/NodeMws/Responses/GetAsinCategoriesResponse.html#method___construct", "name": "SellerLabs\\NodeMws\\Responses\\GetAsinCategoriesResponse::__construct", "doc": "&quot;Create a GetAsinCategoriesResponse from a raw getAsinCategories response\nfrom ModernMws&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\GetAsinCategoriesResponse", "fromLink": "SellerLabs/NodeMws/Responses/GetAsinCategoriesResponse.html", "link": "SellerLabs/NodeMws/Responses/GetAsinCategoriesResponse.html#method_getCategoryMappings", "name": "SellerLabs\\NodeMws\\Responses\\GetAsinCategoriesResponse::getCategoryMappings", "doc": "&quot;Get all category mappings contained in response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\GetAsinCategoriesResponse", "fromLink": "SellerLabs/NodeMws/Responses/GetAsinCategoriesResponse.html", "link": "SellerLabs/NodeMws/Responses/GetAsinCategoriesResponse.html#method_getMainCategory", "name": "SellerLabs\\NodeMws\\Responses\\GetAsinCategoriesResponse::getMainCategory", "doc": "&quot;Get the main category from the response&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\NodeMws\\Responses", "fromLink": "SellerLabs/NodeMws/Responses.html", "link": "SellerLabs/NodeMws/Responses/GetCategoryByIdResponse.html", "name": "SellerLabs\\NodeMws\\Responses\\GetCategoryByIdResponse", "doc": "&quot;Class GetCategoryByIdResponse&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\GetCategoryByIdResponse", "fromLink": "SellerLabs/NodeMws/Responses/GetCategoryByIdResponse.html", "link": "SellerLabs/NodeMws/Responses/GetCategoryByIdResponse.html#method___construct", "name": "SellerLabs\\NodeMws\\Responses\\GetCategoryByIdResponse::__construct", "doc": "&quot;Construct an instance of a GetCategoryByIdResponse&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\GetCategoryByIdResponse", "fromLink": "SellerLabs/NodeMws/Responses/GetCategoryByIdResponse.html", "link": "SellerLabs/NodeMws/Responses/GetCategoryByIdResponse.html#method_getCategoryMapping", "name": "SellerLabs\\NodeMws\\Responses\\GetCategoryByIdResponse::getCategoryMapping", "doc": "&quot;Get the category mapping returned&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\GetCategoryByIdResponse", "fromLink": "SellerLabs/NodeMws/Responses/GetCategoryByIdResponse.html", "link": "SellerLabs/NodeMws/Responses/GetCategoryByIdResponse.html#method_getCategoryId", "name": "SellerLabs\\NodeMws\\Responses\\GetCategoryByIdResponse::getCategoryId", "doc": "&quot;Get the category id associated with this response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\GetCategoryByIdResponse", "fromLink": "SellerLabs/NodeMws/Responses/GetCategoryByIdResponse.html", "link": "SellerLabs/NodeMws/Responses/GetCategoryByIdResponse.html#method_getCategory", "name": "SellerLabs\\NodeMws\\Responses\\GetCategoryByIdResponse::getCategory", "doc": "&quot;Get the category associated with this response&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\NodeMws\\Responses", "fromLink": "SellerLabs/NodeMws/Responses.html", "link": "SellerLabs/NodeMws/Responses/OffersResponse.html", "name": "SellerLabs\\NodeMws\\Responses\\OffersResponse", "doc": "&quot;Class OffersResponse&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\OffersResponse", "fromLink": "SellerLabs/NodeMws/Responses/OffersResponse.html", "link": "SellerLabs/NodeMws/Responses/OffersResponse.html#method___construct", "name": "SellerLabs\\NodeMws\\Responses\\OffersResponse::__construct", "doc": "&quot;Construct an offer response from a Guzzle client response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\OffersResponse", "fromLink": "SellerLabs/NodeMws/Responses/OffersResponse.html", "link": "SellerLabs/NodeMws/Responses/OffersResponse.html#method_getFbaNewOffers", "name": "SellerLabs\\NodeMws\\Responses\\OffersResponse::getFbaNewOffers", "doc": "&quot;Get new FBA offers&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\OffersResponse", "fromLink": "SellerLabs/NodeMws/Responses/OffersResponse.html", "link": "SellerLabs/NodeMws/Responses/OffersResponse.html#method_getFbaUsedOffers", "name": "SellerLabs\\NodeMws\\Responses\\OffersResponse::getFbaUsedOffers", "doc": "&quot;Get used FBA offers&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\OffersResponse", "fromLink": "SellerLabs/NodeMws/Responses/OffersResponse.html", "link": "SellerLabs/NodeMws/Responses/OffersResponse.html#method_getMerchantNewOffers", "name": "SellerLabs\\NodeMws\\Responses\\OffersResponse::getMerchantNewOffers", "doc": "&quot;Get new merchant offers&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\OffersResponse", "fromLink": "SellerLabs/NodeMws/Responses/OffersResponse.html", "link": "SellerLabs/NodeMws/Responses/OffersResponse.html#method_getMerchantUsedOffers", "name": "SellerLabs\\NodeMws\\Responses\\OffersResponse::getMerchantUsedOffers", "doc": "&quot;Get used merchant offers&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\OffersResponse", "fromLink": "SellerLabs/NodeMws/Responses/OffersResponse.html", "link": "SellerLabs/NodeMws/Responses/OffersResponse.html#method_getProductIdCode", "name": "SellerLabs\\NodeMws\\Responses\\OffersResponse::getProductIdCode", "doc": "&quot;Get the product id&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\OffersResponse", "fromLink": "SellerLabs/NodeMws/Responses/OffersResponse.html", "link": "SellerLabs/NodeMws/Responses/OffersResponse.html#method_getProductIdType", "name": "SellerLabs\\NodeMws\\Responses\\OffersResponse::getProductIdType", "doc": "&quot;Get the product id type&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\OffersResponse", "fromLink": "SellerLabs/NodeMws/Responses/OffersResponse.html", "link": "SellerLabs/NodeMws/Responses/OffersResponse.html#method_getExtras", "name": "SellerLabs\\NodeMws\\Responses\\OffersResponse::getExtras", "doc": "&quot;Get an array of all extras&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\OffersResponse", "fromLink": "SellerLabs/NodeMws/Responses/OffersResponse.html", "link": "SellerLabs/NodeMws/Responses/OffersResponse.html#method_hasExtra", "name": "SellerLabs\\NodeMws\\Responses\\OffersResponse::hasExtra", "doc": "&quot;Check whether there is an extra defined with the specified key&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\OffersResponse", "fromLink": "SellerLabs/NodeMws/Responses/OffersResponse.html", "link": "SellerLabs/NodeMws/Responses/OffersResponse.html#method_getExtra", "name": "SellerLabs\\NodeMws\\Responses\\OffersResponse::getExtra", "doc": "&quot;Get a single extra&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\OffersResponse", "fromLink": "SellerLabs/NodeMws/Responses/OffersResponse.html", "link": "SellerLabs/NodeMws/Responses/OffersResponse.html#method_hasEanIdType", "name": "SellerLabs\\NodeMws\\Responses\\OffersResponse::hasEanIdType", "doc": "&quot;Check if the EAN is provided in the extra properties&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\OffersResponse", "fromLink": "SellerLabs/NodeMws/Responses/OffersResponse.html", "link": "SellerLabs/NodeMws/Responses/OffersResponse.html#method_hasUpcIdType", "name": "SellerLabs\\NodeMws\\Responses\\OffersResponse::hasUpcIdType", "doc": "&quot;Check if the UPC is provided in the extra properties&quot;"},
            
            {"type": "Class", "fromName": "SellerLabs\\NodeMws\\Responses", "fromLink": "SellerLabs/NodeMws/Responses.html", "link": "SellerLabs/NodeMws/Responses/SearchResponse.html", "name": "SellerLabs\\NodeMws\\Responses\\SearchResponse", "doc": "&quot;Class SearchResponse&quot;"},
                                                        {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\SearchResponse", "fromLink": "SellerLabs/NodeMws/Responses/SearchResponse.html", "link": "SellerLabs/NodeMws/Responses/SearchResponse.html#method___construct", "name": "SellerLabs\\NodeMws\\Responses\\SearchResponse::__construct", "doc": "&quot;Construct a search response from a Guzzle client response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\SearchResponse", "fromLink": "SellerLabs/NodeMws/Responses/SearchResponse.html", "link": "SellerLabs/NodeMws/Responses/SearchResponse.html#method_getSearchProducts", "name": "SellerLabs\\NodeMws\\Responses\\SearchResponse::getSearchProducts", "doc": "&quot;Get the search products from a NodeMws response.&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\SearchResponse", "fromLink": "SellerLabs/NodeMws/Responses/SearchResponse.html", "link": "SellerLabs/NodeMws/Responses/SearchResponse.html#method_isEmpty", "name": "SellerLabs\\NodeMws\\Responses\\SearchResponse::isEmpty", "doc": "&quot;Check if a SearchResponse gives back no products.&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\NodeMws\\Responses\\SearchResponse", "fromLink": "SellerLabs/NodeMws/Responses/SearchResponse.html", "link": "SellerLabs/NodeMws/Responses/SearchResponse.html#method_first", "name": "SellerLabs\\NodeMws\\Responses\\SearchResponse::first", "doc": "&quot;Return the first product returned from a search query.&quot;"},
            
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
                    {"type": "Method", "fromName": "SellerLabs\\Research\\ResearchClient", "fromLink": "SellerLabs/Research/ResearchClient.html", "link": "SellerLabs/Research/ResearchClient.html#method_generateCode", "name": "SellerLabs\\Research\\ResearchClient::generateCode", "doc": "&quot;Generate an authorization code for NodeMWS&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\ResearchClient", "fromLink": "SellerLabs/Research/ResearchClient.html", "link": "SellerLabs/Research/ResearchClient.html#method_getOffers", "name": "SellerLabs\\Research\\ResearchClient::getOffers", "doc": "&quot;Get the current offers for an ASIN from NodeMWS&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\ResearchClient", "fromLink": "SellerLabs/Research/ResearchClient.html", "link": "SellerLabs/Research/ResearchClient.html#method_getFees", "name": "SellerLabs\\Research\\ResearchClient::getFees", "doc": "&quot;Call the fees endpoint of NodeMWS and return the response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\ResearchClient", "fromLink": "SellerLabs/Research/ResearchClient.html", "link": "SellerLabs/Research/ResearchClient.html#method_getSearch", "name": "SellerLabs\\Research\\ResearchClient::getSearch", "doc": "&quot;Search the catalog and return the response&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\ResearchClient", "fromLink": "SellerLabs/Research/ResearchClient.html", "link": "SellerLabs/Research/ResearchClient.html#method_getAsinCategories", "name": "SellerLabs\\Research\\ResearchClient::getAsinCategories", "doc": "&quot;Get categories for an ASIN&quot;"},
                    {"type": "Method", "fromName": "SellerLabs\\Research\\ResearchClient", "fromLink": "SellerLabs/Research/ResearchClient.html", "link": "SellerLabs/Research/ResearchClient.html#method_getCategoryById", "name": "SellerLabs\\Research\\ResearchClient::getCategoryById", "doc": "&quot;Get a category by ID&quot;"},
            
            
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



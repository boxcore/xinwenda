<form id="pagerForm" method="post" action="#rel#">
    <input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="${model.numPerPage}" />
    <input type="hidden" name="orderField" value="${param.orderField}" />
    <input type="hidden" name="orderDirection" value="${param.orderDirection}" />
</form>

<div class="pageHeader">
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="w_removeSelected.html" method="post">
        <div class="searchBar">
            <ul class="searchContent">
                <li>
                    <label>我的客户：</label>
                    <input type="text" name="keywords" value=""/>
                </li>
                <li>
                    <select class="combox" name="province">
                        <option value="">所有省市</option>
                        <option value="北京">北京</option>
                        <option value="上海">上海</option>
                        <option value="天津">天津</option>
                        <option value="重庆">重庆</option>
                        <option value="广东">广东</option>
                    </select>
                </li>
            </ul>
            <!--
            <table class="searchContent">
                <tr>
                    <td>
                        我的客户：<input type="text"/>
                    </td>
                    <td>
                        <select class="combox" name="province">
                            <option value="">所有省市</option>
                            <option value="北京">北京</option>
                            <option value="上海">上海</option>
                            <option value="天津">天津</option>
                            <option value="重庆">重庆</option>
                            <option value="广东">广东</option>
                        </select>
                    </td>
                </tr>
            </table>
            -->
            <div class="subBar">
                <ul>
                    <li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li>
                    <li><a class="button" href="demo_page6.html" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li>
                </ul>
            </div>
        </div>
    </form>
</div>
<div class="pageContent">
<div class="panelBar">
    <ul class="toolBar">
        <li><a class="add" href="demo_page4.html" target="navTab"><span>添加</span></a></li>
        <li><a title="确实要删除这些记录吗?" target="selectedTodo" rel="ids" href="demo/common/ajaxDone.html" class="delete"><span>批量删除默认方式</span></a></li>
        <li><a title="确实要删除这些记录吗?" target="selectedTodo" rel="ids" postType="string" href="demo/common/ajaxDone.html" class="delete"><span>批量删除逗号分隔</span></a></li>
        <li><a class="edit" href="demo_page4.html?uid={sid_user}" target="navTab" warn="请选择一个用户"><span>修改</span></a></li>
        <li class="line">line</li>
        <li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>
    </ul>
</div>
<table class="table" width="1200" layoutH="138">
<thead>
<tr>
    <th width="22"><input type="checkbox" group="ids" class="checkboxCtrl"></th>
    <th width="120" orderField="accountNo" class="asc">客户号</th>
    <th orderField="accountName">客户名称</th>
    <th width="80" orderField="accountType">客户类型</th>
    <th width="130" orderField="accountCert">证件号码</th>
    <th width="60" align="center" orderField="accountLevel">信用等级</th>
    <th width="70">所属行业</th>
    <th width="70">建档日期</th>
    <th width="70">操作</th>
</tr>
</thead>
<tbody>
<tr target="sid_user" rel="1">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="2">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="3">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="4">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="5">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="6">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="7">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="8">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="9">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="10">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="11">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="12">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="13">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="14">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="15">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="16">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="17">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="18">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="19">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
<tr target="sid_user" rel="20">
    <td><input name="ids" value="xxx" type="checkbox"></td>
    <td>A120113196309052434</td>
    <td>天津市华建装饰工程有限公司</td>
    <td>联社营业部</td>
    <td>29385739203816293</td>
    <td>5级</td>
    <td>政府机构</td>
    <td>2009-05-21</td>
    <td>
        <a title="删除" target="ajaxTodo" href="demo/common/ajaxDone.html?id=xxx" class="btnDel">删除</a>
        <a title="编辑" target="navTab" href="demo_page4.html?id=xxx" class="btnEdit">编辑</a>
    </td>
</tr>
</tbody>
</table>
<div class="panelBar">
    <div class="pages">
        <span>显示</span>
        <select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="100">100</option>
            <option value="200">200</option>
        </select>
        <span>条，共${totalCount}条</span>
    </div>

    <div class="pagination" targetType="navTab" totalCount="200" numPerPage="20" pageNumShown="10" currentPage="1"></div>

</div>
</div>

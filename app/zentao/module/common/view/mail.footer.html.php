<?php
$extViewFile = $this->app->getModuleRoot() . 'ext/view/' . basename(__FILE__);
if(file_exists($extViewFile))
{
    include $extViewFile;
    return;
}
?>
            <?php if(isset($action->objectType) and isset($action->action)):?>
            <?php if(!empty($action->comment)):?>
            <tr>
              <td style="padding:0px 10px 10px 10px; border: none;">
                <fieldset style="border: 1px solid #e5e5e5">
                <legend style="color: #114f8e"><?php echo $this->lang->comment?></legend>
                <div style="padding:5px;"><?php echo $action->comment?></div>
                </fieldset>
              </td>
            </tr>
            <?php endif;?>
            <tr>
              <td style='padding: 10px; background-color: #FFF0D5'>
                <?php if(isset($users[$action->actor])) $action->actor = $users[$action->actor];?>
                <?php if(isset($users[$action->extra])) $action->extra = $users[$action->extra];?>
                <span style='font-size: 16px; color: #F1A325'>●</span> &nbsp;<span><?php $this->action->printAction($action);?></span>
              </td>
            </tr>
            <?php if(!empty($action->history)):?>
            <tr>
              <td style='padding: 10px;'>
                <div><?php echo $this->action->printChanges($action->objectType, $action->history);?></div>
              </td>
            </tr>
            <?php endif;?>
            <?php endif;?>
          </table>
        </td>
      </tr>
  　</table>
    <p>
    <br/>
    <br/>
    <br/>
    ****************************************************************
    <br/>
    这是来自金溢测试（BUG）管理平台邮件通知. &nbsp;<br/>
    登录用户名与OA用户名相同,初始密码为:abc123, 请在登录后请修改密码.&nbsp;<br/>
    平台内网访问地址 http://192.168.100.161:8090<br/>
    平台外网访问地址 http://121.8.153.194:30012<br/>
    金溢科技-创新引领智慧交通<br/>
    </p>
  </body>
</html><?php // close tags in mail.header.html.php ?>
<?php if($onlybody) $_GET['onlybody'] = 'yes';?>

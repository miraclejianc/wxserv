<?php
/**
 ** @name Bootstrap
 ** @author vagrant
 ** @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 ** @see http:www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 ** 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 ** 调用的次序, 和申明的次序相同
 **/
class Bootstrap extends Yaf_Bootstrap_Abstract {
    public function _initPlugin(Yaf_Dispatcher $dispatcher) {
        $objSamplePlugin = new Plugin_Sample();
        $dispatcher->registerPlugin($objSamplePlugin);
    }
    public function _initRoute(Yaf_Dispatcher $dispatcher) {
        $router = $dispatcher->getRouter();
        $route = new Yaf_Route_Simple("m", "c", "a");
        $router->addRoute("wechatRouter", $route);
    }

    public function _initView(Yaf_Dispatcher $dispatcher) {
        $dispatcher->disableView();
    }
}

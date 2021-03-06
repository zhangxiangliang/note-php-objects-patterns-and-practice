# 对象与设计
## 代码设计的定义
* 确定系统的需求、作用域和目标。
* 系统需要做什么？
* 谁需要使用它？
* 系统输出的内容是什么？
* 系统可以满足一定的需求吗？
* 设计是定义系统组成并组织各组件间关系的过程。

## 面向对象设计和过程式编程
### 定义
* 过程式编程表现为一系列命令和方法的连续调用。
* 面向对象编程将职责从客户端代码中移到专门的对象中，尽量减少相互依赖。
### 职责
* 过程式编程忙于处理细节。
* 面向对象只需接口，不用考虑细节，实现由对象负责，而不是客户端代码负责。
### 内聚
* 模块内部各成分之间相关程度的度量。
* 组件职责清晰、分工明确。
### 耦合
* 系统各部分代码紧密绑在一起，就会产生耦合。
### 正交
* 将职责相关的代码组织起来，与外部环境隔离开。
* 不需要任何特殊配置就能把一个新组件插入新系统。

## 选择类
* 一个类只有一个主要职责。
* 任务尽可能独立。
* (可以把类的职责用多个次形容，最好不超过25个，不要用到词 `且` or `或`，太过复杂时考虑新类)

## 多态
* 在一个公共接口后面维护多个实现。
* 如果代码中出现大量条件语句，就说明需要使用多态。
* 尝试保持返回值一致，不然会损害类型的互换性。

## 封装
* 对客户端代码隐藏数据和功能。
* 使用 `private` 和 `protected` 防止污染。
* 封装好，修改内部隐藏内容时，不会影响到外部。
* 多态是另一种封装。

## 忘记细节
* 不固化思想。
* 为接口而不是实现而编程。

## 四个方向标
* 代码重复 - 减少重复相式的代码。
* 类知道的太多 - 使用全局变量来代替参数传递。
* 万能的类 - 减少类中所做的事情。
* 条件语句 - 利用多态来代替条件语句。

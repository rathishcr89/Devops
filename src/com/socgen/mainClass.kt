package com.socgen

class mainClass {

    fun main(args:Array<String>)
    {
        var obj=AddtwoNos()
        var a:Int=obj.readInt();
        var b:Int=obj.readInt();
        println("Sum = "+obj.addNum(a,b))
    }


}
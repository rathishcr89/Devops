package com.socgen

import java.io.*
import java.util.*

class AddtwoNos {
    var reader= Scanner(System.`in`)

    fun readInt():Int{
        println("Enter a number: ")
        return (reader.nextInt())
    }

    fun addNum(a:Int,b:Int):Int{
        return(a+b)
    }
}
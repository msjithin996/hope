package com.codewreckor.hope;

/**
 * Created by jobin on 02-03-2018.
 */

public class Users {
    public String Image , Name , Status ;
    public Users(){

    }

    public String getImage() {
        return Image;
    }

    public void setImage(String image) {
        this.Image = image;
    }

    public String getName() {
        return Name;
    }

    public void setName(String name) {
        this.Name = name;
    }

    public String getStatus() {
        return Status;
    }

    public void setStatus(String status) {
        this.Status = status;
    }

    public Users(String Image, String Name, String Status) {

        this.Image = Image;
        this.Name = Name;
        this.Status = Status;
    }
}

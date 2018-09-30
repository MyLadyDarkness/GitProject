/*
Navicat PGSQL Data Transfer

Source Server         : local
Source Server Version : 90324
Source Host           : localhost:5432
Source Database       : OnlineCinema
Source Schema         : public

Target Server Type    : PGSQL
Target Server Version : 90324
File Encoding         : 65001

Date: 2018-09-30 23:05:10
*/


-- ----------------------------
-- Table structure for "public"."Authors"
-- ----------------------------
DROP TABLE "public"."Authors";
CREATE TABLE "public"."Authors" (
"Author_id" numeric(10) NOT NULL,
"Author_name" varchar(100) NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Authors
-- ----------------------------
INSERT INTO "public"."Authors" VALUES ('1', 'Egor Petrov');
INSERT INTO "public"."Authors" VALUES ('2', 'Ylia Sergeeva');
INSERT INTO "public"."Authors" VALUES ('3', 'Fedor Sviridov');
INSERT INTO "public"."Authors" VALUES ('4', 'Vasya Pupkin');
INSERT INTO "public"."Authors" VALUES ('5', 'Ivan Nepomnu');

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table "public"."Authors"
-- ----------------------------
ALTER TABLE "public"."Authors" ADD PRIMARY KEY ("Author_id");

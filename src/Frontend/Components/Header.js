import { Image, StyleSheet, Text, View, TouchableOpacity } from "react-native";
import React from "react";
import { styles } from "../../Function/styles";
import { useGlobalContext } from "../../Function/Context";

const Header = ({
  navigation,
  functions,
  imgtype,
  functions2,
  imgtype2,
  title,
}) => {
  return (
    <View style={styles.homeHeader}>
      <TouchableOpacity
        onPress={functions && functions}
        style={styles.profilePic}
      >
        <Image
          source={imgtype ? imgtype : require("../../../assets/menu.png")}
          resizeMode="cover"
          style={{ height: imgtype ? 28 : 20, width: imgtype ? 28 : 20 }}
        />
      </TouchableOpacity>
      <View>
        <Text
          style={[
            styles.headerTitle,
            { color: "black", paddingHorizontal: 10, paddingVertical: 5 },
          ]}
        >
          {title ? title : "Trail System"}
        </Text>
      </View>
      <TouchableOpacity
        onPress={functions2 && functions2}
        style={styles.profilePic}
      >
        <Image
          source={imgtype2}
          resizeMode="cover"
          style={{ height: 30, width: 30 }}
        />
      </TouchableOpacity>
    </View>
  );
};

export default Header;

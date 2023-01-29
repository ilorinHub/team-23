import {
  Image,
  SafeAreaView,
  ScrollView,
  StyleSheet,
  Text,
  TouchableOpacity,
  View,
} from "react-native";
import React, { useEffect, useState } from "react";
import { doc, getDoc } from "firebase/firestore";
import { db } from "../../../Utils/Firebase";

import { styles } from "../../../Function/styles";
import { useGlobalContext } from "../../../Function/Context";
import SelectDropdown from "react-native-select-dropdown";

const initialState = {
  img: "",

  description: "",
  dateofMemo: "",
  recipientMinistry: "",
  MatchDate: "",
  memoTitle: "",
  senderMinistry: "",
  Approvals: [],
};

const ForwardedMessage = ({
  route,
  navigation,

  imgtype,
}) => {
  console.log(memoId);
  const { memoId } = route.params;

  const { Ministries, Departments } = useGlobalContext();

  const [MemoInfo, MemoInfoF] = useState(initialState);

  const [minitries, minitriesF] = useState("");
  const [Department, DepartmentF] = useState("");

  useEffect(() => {
    memoId && getMemoDetail();
  }, [memoId]);

  const getMemoDetail = async () => {
    loaderF(true);
    const docRef = doc(db, "Memo", memoId);
    const snapshot = await getDoc(docRef);
    if (snapshot.exists()) {
      MemoInfoF({ ...snapshot.data() });
    }
    loaderF(false);
  };
  const wait = (timeout) => {
    return new Promise((resolve) => setTimeout(resolve, timeout));
  };

  const [refreshing, setRefreshing] = React.useState(false);

  const onRefresh = React.useCallback(() => {
    getMemoDetail();
    wait(2000).then(() => setRefreshing(false));
  }, []);

  function navigateTogoBack(params) {
    navigation.goBack();
  }
  return (
    <SafeAreaView style={styles.container}>
      <ScrollView showsVerticalScrollIndicator={false}>
        <View style={[styles.homeHeader, { justifyContent: "space-between" }]}>
          <TouchableOpacity
            onPress={() => navigateTogoBack()}
            style={styles.profilePic}
          >
            <Image
              source={require("../../../../assets/ba.png")}
              resizeMode="cover"
              style={{ height: imgtype ? 28 : 20, width: imgtype ? 28 : 20 }}
            />
          </TouchableOpacity>
          <View style={styles.headerTitleDiv}>
            <Text style={styles.headerTitle}>Trail System</Text>
          </View>
          <TouchableOpacity
            onPress={() => handleDeleteMemo(memoId)}
            style={styles.profilePic}
          >
            <Image
              //   source={require("../../../../assets/delete.png")}
              resizeMode="cover"
              style={{ height: 18, width: 18 }}
            />
          </TouchableOpacity>
        </View>

        <Text style={{ paddingVertical: 3, fontWeight: "600" }}>
          Forward Memo
        </Text>

        <View style={{ marginTop: 10 }}>
          <Text style={{ paddingVertical: 3, fontWeight: "600" }}>
            Select Ministry
          </Text>

          <SelectDropdown
            data={Ministries}
            defaultButtonText="Please select Ministry"
            buttonStyle={styles.dropdownStyle}
            buttonTextStyle={styles.dropdownStyleTxt}
            onSelect={(selectedItem, index) => {
              minitriesF(selectedItem);
            }}
          />
        </View>
        <View style={{ marginTop: 10 }}>
          <Text style={{ paddingVertical: 3, fontWeight: "600" }}>
            Select Department
          </Text>

          <SelectDropdown
            data={Departments}
            defaultButtonText="Please select Department"
            buttonStyle={styles.dropdownStyle}
            buttonTextStyle={styles.dropdownStyleTxt}
            onSelect={(selectedItem, index) => {
              DepartmentF(selectedItem);
            }}
          />
        </View>

        <View style={{ marginTop: 20 }}>
          <Text style={{ fontSize: 20, fontWeight: "600" }}>
            Maintenance of equipment and funds disbursement
          </Text>

          <View
            style={{ marginTop: 30, display: "flex", flexDirection: "row" }}
          >
            <Image
              source={require("../../../../assets/all.png")}
              resizeMode="contain"
              style={{ height: 50, width: 50 }}
            />

            <View style={{ marginLeft: 10 }}>
              <Text>Ministry of Health</Text>
              <Text style={{ paddingVertical: 5 }}>
                Sun Jan 29 2023 13:40:19
              </Text>
            </View>
          </View>

          <View
            style={{ marginTop: 30, display: "flex", flexDirection: "column" }}
          >
            <Text style={{ marginBottom: 10 }}>From: mariam@gmail.com</Text>
            <Text>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci
              fugiat reiciendis eveniet minus aperiam, quod excepturi
              consectetur repellendus architecto. Id ipsam enim, officia eveniet
              atque earum minima, fuga excepturi iure fugiat quaerat incidunt
              ducimus laudantium optio numquam nostrum vitae exercitationem
              quasi? Consequuntur unde corporis temporibus ut debitis odit harum
              omnis assumenda deserunt aliquam, magni officia, maxime aperiam
              optio obcaecati veritatis adipisci numquam porro sit, a quibusdam
              nostrum! Id commodi fugiat beatae harum tempora quae! Sunt ea
              nihil vero mollitia, odio nesciunt laudantium facere provident
              animi eum totam quis voluptates numquam facilis officiis labore
              perspiciatis fuga saepe quo rem molestiae? Libero facere est
              impedit ad voluptatem dolor suscipit quas et harum officia
              nesciunt maxime fugit sequi id tempore nulla, explicabo sapiente
              illo amet consectetur? Laborum quod sequi corporis. Aliquam
              impedit hic molestiae dolore esse, soluta fugit tenetur adipisci
              magni minima, fuga, neque enim repellendus similique?
              Reprehenderit recusandae placeat repellendus delectus dignissimos
              cumque laboriosam vero aliquid molestiae magnam at necessitatibus
              facilis fuga, repellat autem blanditiis, minus nulla, dolores
              voluptatibus adipisci tempora corrupti enim voluptas. Dignissimos,
              dolore! Voluptate placeat quasi a nisi deleniti accusantium quae
              perspiciatis repellendus beatae, animi incidunt recusandae facere
              officiis sunt! Distinctio porro ex vitae dicta tempora nulla
              dolore autem omnis, sapiente nam quis ea soluta itaque aliquid
              temporibus sint amet laboriosam? Natus nesciunt facilis
              perferendis neque eaque quisquam nobis, nulla sint odit corporis
              temporibus reiciendis dolorum tempora beatae provident, animi
              fugiat aliquid exercitationem? Dicta perferendis omnis ipsum
              exercitationem eveniet debitis eaque reiciendis. Minima
              dignissimos aspernatur asperiores ipsam impedit eligendi debitis.
              Cum laudantium, cupiditate debitis blanditiis quas dignissimos
              nesciunt totam laboriosam ipsum voluptas pariatur repellendus
              expedita tempora in obcaecati aperiam est distinctio facere ipsa
              fuga facilis itaque culpa. Maiores alias tenetur vel maxime sunt
              laboriosam quisquam debitis, pariatur quae consectetur rerum
              similique blanditiis id possimus? Soluta delectus excepturi libero
              dolore?
            </Text>
          </View>

          {MemoInfo?.img && (
            <View style={{ marginTop: 20 }}>
              <Text style={{ fontSize: 20, fontWeight: "600" }}>
                Document Attached
              </Text>
            </View>
          )}

          <TouchableOpacity
            onPress={() => {
              Linking.openURL(MemoInfo?.img);
            }}
          >
            <Image
              source={{ uri: MemoInfo?.img }}
              resizeMode="contain"
              style={{ height: 200, width: 150 }}
            />
          </TouchableOpacity>

          <View
            style={{
              marginTop: 30,
              display: "flex",
              flexDirection: "row",
              justifyContent: "space-between",
            }}
          >
            <TouchableOpacity
              style={{
                borderColor: "black",
                borderWidth: 1,
                borderRadius: 5,
                display: "flex",
                flexDirection: "row",

                alignItems: "center",
                paddingHorizontal: 10,
              }}
            >
              <Image
                source={require("../../../../assets/righta.png")}
                resizeMode="contain"
                style={{ height: 15, width: 15 }}
              />
              <Text style={{ padding: 10 }}>Send</Text>
            </TouchableOpacity>
          </View>
        </View>
      </ScrollView>
    </SafeAreaView>
  );
};

export default ForwardedMessage;
